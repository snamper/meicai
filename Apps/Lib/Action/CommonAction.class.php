<?php
/*前台动作基类*/
class CommonAction extends Action {
    //初始化
    function _initialize(){
        header("Content-Type:text/html; charset=utf-8");
        //import('@.ORG.Util.Cookie');

        //每日流量统计
        $tjdate=D('Tjdate');
        $map['create_date']=array('eq',date('Ymd',time()));
        $vl=$tjdate->where($map)->find();
        if($vl){
            $tjdate->id=$vl['id'];
            $tjdate->create_num=$vl['create_num']+1;
            $tjdate->save();
        }else{
            $tjdate->create_date=date('Ymd',time());
            $tjdate->create_num=1;
            $tjdate->add();
        }
        
        //页面流量统计
        $tjurl=D('Tjurl');
        $map['create_url']=__SELF__;
        $vla=$tjurl->where($map)->find();
        if($vla){
            $tjurl->id=$vla['id'];
            $tjurl->create_num=$vla['create_num']+1;
            $tjurl->save();
        }else{
            $tjurl->create_url=__SELF__;
            $tjurl->create_num=1;
            $tjurl->add();
        }
     
        $this->sitename=C(SITE_NAME);//站点名称
        $this->wxqrcode=C('WX_QRCODE');
        
    }
   
    //SEO赋值
    public function seo($title,$keywords,$description,$positioin){
    	$this->assign('title',$title);
    	$this->assign('keywords',$keywords);
    	$this->assign('description',$description);
    	$this->assign('position',$positioin);
       
    }

    
    public function index() {
        
        if(method_exists($this, '_filter')){
            $this->_filter($map);
        }
        
        $id = I('id');
        $catdata = D('Category')->where('status=1')->find($id);	
        
        //获取所有子类id
        $catlist = D('Category')->where('status=1')->select();	
        $idlist = $id.','.arrToTree($catlist,$id);  
        $idlist= substr($idlist, 0, strlen($idlist)-1);
        $map['catid'] = array('in',$idlist);
        
        $name = $this->getActionName();
        
        //获取分页设置
        $Model=M('Model');
        $map['table']=array('eq',$name);
        $pageinfo=$Model->where($map)->find();

        $Form   =   M($name);
        import("@.ORG.Page");       //导入分页类
        $count  = $Form->where($map)->count();    //计算总数
        $Page = new Page($count, $pageinfo['listrows']);
        $list   = $Form->where($map)->limit($Page->firstRow. ',' . $Page->listRows)->order('listorder,id desc')->select();

        // 设置分页显示
        $Page->setConfig('header', $pageinfo['header']);
        $Page->setConfig('first', $pageinfo['first']);
        $Page->setConfig('last', $pageinfo['last']);
        $Page->setConfig('prev', $pageinfo['prev']);
        $Page->setConfig('next', $pageinfo['next']);
        $Page->setConfig('theme',$pageinfo['theme']);
        $page = $Page->show();

        $position=D('Common')->getPosition($id);
        foreach ($position as $value) {
            $title=$value['catname']."_".$title;
        }
        $title=  substr($title, 0, strlen($title)-1);
        
        $this->seo(($catdata['title'])?$catdata['title']:$title, ($catdata['keywords'])?$catdata['keywords']:C(SITE_KEYWORDS), ($catdata['description'])?$catdata['description']:C(SITE_DESCRIPTION), $position);
        $this->assign("data", $catdata);
        $this->assign("page", $page);
        $this->assign("list", $list);
        $this->display(); 
    }
    public function show()
    {
        $id= I('id');
        $name = $this->getActionName();
        
        D($name)->where('id='.$id)->setInc('hits',1);//浏览次数
       
        $model=M($name);

        //当前记录
        $data=$model->find($id);
        
        //上一条记录
        $prevdata=$model->where('id<'.$id)->order('id desc')->limit('1')->find();
        
        //下一条记录
        $nextdata=$model->where('id>'.$id)->order('id asc')->limit('1')->find();
        
        //seo设置
        $position=D('Common')->getPosition($data['catid']);
        $this->seo($data['title'], $data['keywords'], $data['description'], $position);
        
        //内链优化
        $Chain=D('Chain');
        $ChainMap['status']=array('eq',1);
        $Chainlist=$Chain->where($ChainMap)->select();
        foreach ($Chainlist as $key => $value) {
            $data['content']=preg_replace('/'.$value['keyword'].'/i',"<a href=".$value['url']." target=".$value['target'].">".$value['keyword']."</a>", $data['content'],$value['number']);
        }

        $this->data=$data;
        $this->prevdata=$prevdata;
        $this->nextdata=$nextdata;
        //Cookie::set('_currentUrl_', __SELF__);
        session('_currentUrl_', __SELF__);
        $this->display(); 
    }
    
    
    
}