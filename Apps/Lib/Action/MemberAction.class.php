<?php
// 后台用户模块
class MemberAction extends CommonAction {
    public function index() {
        if(isset($_SESSION['account'])) {
            $map['id']=array('eq',$_SESSION['id']);
            $Member=M('Member');
            $data=$Member->where($map)->find();
            $this->data=$data;
            $position[]=array('id'=>'index','catname'=>'会员中心');
            $this->seo('会员中心', '', '', $position);
            $this->display();
        }else{
            $this->redirect('Member/login');
        }
    }
    //注册页面
    public function register(){
        $this->display();
    }

        // 检查帐号
    public function checkAccount() {
       if($_POST){
          $data['role_id'] = $_POST['type'];
          $data['email'] = $_POST['email'];
          $data['phone'] = $_POST['phone'];
          $data['password'] = md5($_POST['password']);
          $data['create_time'] = date("Y-m-d H:i:s",time());
          $mess = array();
          $where['email']=$_POST['email'];
          $result = M('Member')->where($where)->count();
          if($result){
                $mess['status'] = 1;
            }else{
                $rst = M('Member')->add($data);
                if($rst){
                    $mess['status'] = 2;
                }else{
                    $mess['status'] = 3;
                }
            }
            $this->ajaxReturn($mess,'JSON');
           }
    }
    // 用户登录页面
    public function login() {
        if(isset($_SESSION['account'])) {
            $this->redirect('Member/index');
        }else{
            $position[]=array('id'=>'login','catname'=>'会员登录');
            $this->seo('会员登录', '', '', $position);
            $this->display();
        }
    }
     // 登录检测
    public function checkLogin() {
        $email = $_POST['email'];
        $type = $_POST['type'];
        $password = md5($_POST['password']);
        $Member=M('Member');
        $where['email'] = $email;
        $where['phone'] = $email;
        $where['_logic'] = 'OR';
        $authInfo=$Member->where($where)->find();
        $mess = array();
        //使用用户名、密码和状态的方式进行认证
        if($authInfo == '' || ($password != $authInfo['password'])) {
            $mess['status'] = 0;
        }else {
            $_SESSION['id']=$authInfo['id'];
            $_SESSION['account']=$authInfo['account'];
            $_SESSION['nickname']=$authInfo['nickname'];
            $_SESSION['email']=$authInfo['email'];
            $_SESSION['lastLoginTime']=$authInfo['last_login_time'];
            $_SESSION['login_count']=$authInfo['login_count'];

            //保存登录信息
            $User=M('Member');
            $ip=get_client_ip();
            $time=time();
            $data = array();
            $data['id']=$authInfo['id'];
            $data['last_login_time']=$time;
            $data['login_count']=array('exp','login_count+1');
            $data['last_login_ip']=$ip;
            $rst = $User->save($data);
            if($rst){
                $mess['status'] = 1;
                $mess['type'] = $type;
            }else{
                $mess['status'] = 2;
            }
            //$this->success('登录成功！',Cookie::get('_currentUrl_'));
            // if(session('?_currentUrl_')){
            //     $this->success('登录成功！', session('_currentUrl_'));
            // }else{
            //     $this->success('登录成功！', 'Member/index');
            // }

        }
        $this->ajaxReturn($mess,'JSON');
    }
    // 用户退出
    public function logout() {
        if(isset($_SESSION['account'])) {
            unset($_SESSION['account']);
            $this->redirect(__APP__);
        }else {
            $this->error('已经退出！');
        }
    }
 

    // 检查用户是否登录
    protected function checkUser() {
        if(!isset($_SESSION['account'])) {
            $this->assign('jumpUrl','Member/login');
            $this->error('没有登录');
        }
    }

    //个人页面
    public function person(){
        $this->display();
    }
    
    //公司页面
    public function company(){
        $this->display();
    }
    //用户资料
    public function profile() {
        $this->checkUser();
        $User=M("Member");
        $vo=$User->getById($_SESSION['id']);
        $this->assign('vo',$vo);
        $position[]=array('id'=>'profile','catname'=>'修改资料');
        $this->seo('修改资料', '', '', $position);
        $this->display();
    }
    // 修改资料
    public function change() {
        $this->checkUser();
        $id=I('id',0,'intval');
        $nickname=I('nickname');
        $email=I('email');
        
        $User=D("Member");
        $data=array(
            'nickname'=>$nickname,
            'email'=>$email,
        );
        $result	=$User->where(array('id'=>$id))->save($data);
        if(false !== $result) {
            $this->success('资料修改成功！');
        }else{
            $this->error('资料修改失败!');
        }
    }
    public function password(){
        $position[]=array('id'=>'password','catname'=>'修改密码');
        $this->seo('修改密码', '', '', $position);
        $this->display();
    }

    // 更换密码
    public function changePwd() {
	$this->checkUser();
        //对表单提交处理进行处理或者增加非表单数据
        if(md5($_POST['verify'])!= $_SESSION['verify']) {
            $this->error('验证码错误！');
        }
        $map=array();
        $map['password']= pwdHash(I('oldpassword'));
        if(isset($_SESSION['id'])) {
            $map['id']=$_SESSION['id'];
        }
        //检查用户
        $User=M("Member");
        if(!$User->where($map)->field('id')->find()) {
            $this->error('输入的旧密码不正确！');
        }else {
            $User->password=pwdHash(I('password'));
            $User->save();
            $this->success('密码修改成功！');
         }
    }
    //验证码
    public function verify() {
        $type=isset($_GET['type'])?$_GET['type']:'gif';
        import("@.ORG.Util.Image");
        Image::buildImageVerify(4,1,$type);
    }
    //用户订单查询
    public function order(){
        $map['memberid']=$_SESSION['id'];
        $Order=M('Order');
        
        import("@.ORG.Page");       //导入分页类
        $count  = $Order->where($map)->count();    //计算总数
        $Page = new Page($count, 15);
        $list   = $Order->where($map)->limit($Page->firstRow. ',' . $Page->listRows)->order('id desc')->select();
        // 设置分页显示
        $page = $Page->show();
        
        $this->page=$page;
        $this->list=$list;
        $position[]=array('id'=>'order','catname'=>'订单查询');
        $this->seo('订单查询', '', '', $position);
        $this->display();
    }
    public function orderdetail(){

        $model = M('Order');
        $id = $_REQUEST [$model->getPk()];
        $data = $model->getById($id);
        
        
        //根据ID获取产品信息
        $map['orderid']=array('eq',$data['id']);
	$Product=D("Orderdetail");
	$list=$Product->where($map)->select();
        if(is_array($list)){
            foreach ($list as $key=>$val){
                $map1['id']=array('eq',$val['proid']);
                $map1['status']=array('eq',1);
                $list[$key]['sub_list'] = D('Product')->where($map1)->find();
            }
        }
        
        $position[]=array('id'=>'order','catname'=>'订单详细');
        $this->seo('订单详细', '', '', $position);
	$this->assign('list', $list);
        $this->assign('data', $data);
        $this->display();
    }

}
?>