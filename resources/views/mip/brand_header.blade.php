<div id="item1">
    <div class="item1box">
        <div class="item1boxleft fl">
            <div class="title"><h1>{{$thisarticleinfos->brandname}}加盟</h1></div>
            <div class="text">{{$thisarticleinfos->brandgroup}}</div>
            <div class="time"><span>{{date('Y-m-d',strtotime($thisarticleinfos->created_at))}}</span></div>
        </div>
        <div class="item1boxmiddle fl">
            <div class="top">{{$thisarticleinfos->brandpay}}</div>
            <li class="tl">所属行业：<span>{{$thisarticleinfos->arctype->typename}}</span></li>
            <li class="tl">经营范围：<span>{{$thisarticleinfos->brandmap}}</span></li>
            <li class="tl">店铺面积：<span>{{\App\AdminModel\Acreagement::where('id',$thisarticleinfos->acreage)->value('type')}}㎡</span></li>
        </div>
    </div>
</div>