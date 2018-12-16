/**
 * Titulo: Crear un slider desde 0
 * Categoria: Tutorial, Dise?o web, Javascript
 * Blog: http://creaticode.com/blog/
 */
$(function() {
	var SliderModule = (function() {
		var pb = {};
		pb.el = $('#slider');
		pb.items = {
			panel: pb.el.find('li')
		}

		// Variables Necesarias
		var SliderInterval,
			currentSlider = 0,
			nextSlider = 1,
			lengthSlider = pb.items.panel.length;

		// Initialize
		pb.init = function(settings) {
			this.settings = settings || {duration: 8000} 
			var output = '';

			// Activamos nuestro slider
			SliderInit();

			for(var i = 0; i < lengthSlider; i++) {
				if (i == 0) {
					output += '<li class="active"></li>'; 
				} else {
					output += '<li></li>';
				}
			}

			// Controles del Slider
			$('#slider-controls').html(output).on('click', 'li', function (e){
				var $this = $(this);
				if (currentSlider !== $this.index()) {
					changePanel($this.index());
				};
			});
		}

		var SliderInit = function() {
			SliderInterval = setInterval(pb.startSlider, pb.settings.duration);
		}

		pb.startSlider = function() {
			var panels = pb.items.panel,
				controls = $('#slider-controls li');

			if (nextSlider >= lengthSlider) {
				nextSlider = 0;
				currentSlider = lengthSlider-1;
			}

			// Efectos
			controls.removeClass('active').eq(nextSlider).addClass('active');
			panels.eq(currentSlider).fadeOut('slow');
			panels.eq(nextSlider).fadeIn('slow');

			// Actualizamos nuestros datos
			currentSlider = nextSlider;
			nextSlider += 1; 
		}

		// Funcion para controles del slider
		var changePanel = function(id) {
			clearInterval(SliderInterval);
			var panels = pb.items.panel,
				controls = $('#slider-controls li');

			// Comprobamos el ID
			if (id >= lengthSlider) {
				id = 0;
			} else if (id < 0) {
				id = lengthSlider-1;
			}

			// Efectos
			controls.removeClass('active').eq(id).addClass('active');
			panels.eq(currentSlider).fadeOut('slow');
			panels.eq(id).fadeIn('slow');

			// Actualizamos nuestros datos
			currentSlider = id;
			nextSlider = id+1;

			// Reactivamos el slider
			SliderInit();
		}


		return pb;
	}());
	SliderModule.init({duration: 4000});
});






//js无缝滚动代码
function marquee(i, direction){
	var obj = document.getElementById("marquee" + i);
	var obj1 = document.getElementById("marquee" + i + "_1");
	var obj2 = document.getElementById("marquee" + i + "_2");
	if (direction == "up"){
		if (obj2.offsetTop - obj.scrollTop <= 0){
			obj.scrollTop -= (obj1.offsetHeight + 20);
		}else{
			var tmp = obj.scrollTop;
			obj.scrollTop++;
			if (obj.scrollTop == tmp){
				obj.scrollTop = 1;
			}
		}
	}else{
		if (obj2.offsetWidth - obj.scrollLeft <= 0){
			obj.scrollLeft -= obj1.offsetWidth;
		}else{
			obj.scrollLeft++;
		}
	}
}

function marqueeStart(i, direction){
	var obj = document.getElementById("marquee" + i);
	var obj1 = document.getElementById("marquee" + i + "_1");
	var obj2 = document.getElementById("marquee" + i + "_2");

	obj2.innerHTML = obj1.innerHTML;
	var marqueeVar = window.setInterval("marquee("+ i +", '"+ direction +"')", 20);
	obj.onmouseover = function(){
		window.clearInterval(marqueeVar);
	}
	obj.onmouseout = function(){
		marqueeVar = window.setInterval("marquee("+ i +", '"+ direction +"')", 20);
	}
}


//首页焦点图滚动代码

var tt=null;
var kkk;
var n=0;
var timer=0;
window.onload=function(){
	var li=document.getElementById("btn").getElementsByTagName("li");
	kkk=document.getElementById("imm").getElementsByTagName("a");
	for(var i=0;i<kkk.length;i++){
		if(i!=0){
			kkk[i].style.opacity=0;
		}
	}
	for(var j=0;j<li.length;j++){
			li[j].onmouseover=function(){
				var that=this;
				tt=setTimeout(function(){ var index=that.innerHTML-1;
					n=index;
					if(index <kkk.length){
						for(var o=0;o<li.length;o++){
							li[o].className="";
							kkk[o].style.opacity=0;
							kkk[o].style.zIndex=9998;
						}
						that.className="on";
						kkk[index].style.opacity=1;
						kkk[index].style.zIndex=9999;
						kkk[index].style.transition="opacity 0.8s";
					   leftf(-100,0,kkk[index]);
					}
				},100);

			};
		li[j].onmouseout=function(){
			clearTimeout(tt)
		}
		}
	var left=document.getElementById("left");
	var right=document.getElementById("right");
	var jiao=document.getElementById("jiao");
	var body=document.getElementById("cont");

	timer = setInterval("autoplay()",2000);
	body.onmouseover=function(){
		jiao.style.display="block";
		clearInterval(timer);
	};
	body.onmouseout=function(){
		jiao.style.display="none";
		timer = setInterval("autoplay()",5000);
	};
	left.onclick=function(){
		if(n>0){
			n--
		}else if(n==0){
			n=kkk.length-1;
		}
		var li=document.getElementById("btn").getElementsByTagName("li");
		li[n].onmouseover()
	};
	right.onclick=function(){
		n=n>=(kkk.length-1)?0:++n;
		var li=document.getElementById("btn").getElementsByTagName("li");
		li[n].onmouseover()
	}
}

;
function leftf(start,end,ele){ var tt=setInterval(function (){
	start+=10;
	ele.style.left=start+"px";
	if(start==end){
		clearInterval(tt)
	}
			},20)
}

function autoplay(){
	n=n>=(kkk.length-1)?0:++n;
	var li=document.getElementById("btn").getElementsByTagName("li");
	li[n].onmouseover()
};

