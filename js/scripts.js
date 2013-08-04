/*
 * jQuery 1.2.6 - New Wave Javascript
 *
 * Copyright (c) 2008 John Resig (jquery.com)
 * Dual licensed under the MIT (MIT-LICENSE.txt)
 * and GPL (GPL-LICENSE.txt) licenses.
 *
 * $Date: 2008-05-24 14:22:17 -0400 (Sat, 24 May 2008) $
 * $Rev: 5685 $
 */

 
jQuery(function($) {
 
	var Engine = {
		utils : {
			// external links
			links : function(){
				$('a[@rel*=external]').attr('target','_blank');
			},
			// mails
			mails : function(){
				$('a[@href^=mailto:]').each(function(){
					var mail = $(this).attr('href').replace('mailto:','');
					var replaced = mail.replace('/at/','@');
					$(this).attr('href','mailto:'+replaced);
					if($(this).text() == mail) $(this).text(replaced);
				});
			}
		},
		// form
		form : {
			init : function(){
				$('#f-url').val('');
				this.labels();
			},
			labels : function(){
				$('form input, form textarea').each(function(){
					if($(this).val() !== ''){
						$(this).prev('label').addClass('hide');
					}
				}).focus(function(){
					$(this).prev('label').addClass('hide');
				}).blur(function(){
					if($(this).val() === ''){
						$(this).prev('label').removeClass('hide');
					}
				});
			}
		},
		// work samples
		work : {
			init : function(){
				samplez = $('#samples');
				this.count = samplez.find('div.project').size();
				
				if(this.count < 2) return;
				samplez.find('div.project:first').before('<ul class="index"><li class="prev"><a href="#prev">&laquo;</a></li><li class="next"><a href="#next">&raquo;</a></li></ul>');
				
				samplez.find('ul.index').click(function(e){
					e.preventDefault();
					
					if($(e.target).is('a') && samplez.find('div.project:animated').size() == 0){
						samplez.find('div.project:visible').fadeOut(700,function(){
							
							if($(e.target).parent().hasClass('prev')){
								var show = $(this).prev('div.project').size() > 0 ? $(this).prev('div.project') : samplez.find('div.project:last');
							} else {
								var show = $(this).next('div.project').size() > 0 ? $(this).next('div.project') : samplez.find('div.project:first');
							}
							show.fadeIn(700);
						});
					}
				});
			}
		},
		// testimonials
		testimonials : {
			init : function(){
				testimonialz = $('#testimonials');
				this.count = testimonialz.find('div.testimonial').size();
				
				if(this.count < 2) return;
				testimonialz.find('div.testimonial:last').after('<ul class="index"><li class="prev"><a href="#prev">&laquo;</a></li><li class="next"><a href="#next">&raquo;</a></li></ul>');
				
				testimonialz.find('ul.index').click(function(e){
					e.preventDefault();
					
					if($(e.target).is('a') && testimonialz.find('div.testimonial:animated').size() == 0){
						testimonialz.find('div.testimonial:visible').fadeOut(700,function(){
							
							if($(e.target).parent().hasClass('prev')){
								var show = $(this).prev('div.testimonial').size() > 0 ? $(this).prev('div.testimonial') : testimonialz.find('div.testimonial:last');
							} else {
								var show = $(this).next('div.testimonial').size() > 0 ? $(this).next('div.testimonial') : testimonialz.find('div.testimonial:first');
							}
							show.fadeIn(700);
						});
					}
				});
			}
		}
	}

	//Engine.utils.links();
	//Engine.utils.mails();
	//Engine.form.init();
	Engine.work.init();
	Engine.testimonials.init();
	
});

document.write('<link rel="stylesheet" type="text/css" media="screen" href="styles/javascript.css" />');