/**
* @desc: Thu vien nay duoc lay tu trang cafef.vn
*
* @author: phuonghv@24h.com.vn @date: 2010/06/23 @desc: create edit
* @editer: hailt@24h.com.vn @date: 2012/08/14 @desc: remove functions not use
*/
function CafeF_Library() 
{
	this.CreateScriptObject = function(src)
	{
		var script_object = document.createElement('script');
		script_object.setAttribute('type','text/javascript');
		script_object.setAttribute('src', src);
		var head = document.getElementsByTagName('head')[0];
		head.appendChild(script_object);
	}
	this.RemoveScriptObject = function(obj)
	{
		if(obj)
		{
			obj.parentNode.removeChild(obj) ;
			obj = null ;
		}
	}
	this.KoDauChars = 'aaaaaaaaaaaaaaaaaeeeeeeeeeeediiiiiooooooooooooooooouuuuuuuuuuuyyyyyAAAAAAAAAAAAAAAAAEEEEEEEEEEEDIIIOOOOOOOOOOOOOOOOOOOUUUUUUUUUUUYYYYYAADOOU';
	this.uniChars = 'Ã Ã¡áº£Ã£áº¡Ã¢áº§áº¥áº©áº«áº­Äƒáº±áº¯áº³áºµáº·Ã¨Ã©áº»áº½áº¹Ãªá»áº¿á»ƒá»…á»‡Ä‘Ã¬Ã­á»‰Ä©á»‹Ã²Ã³á»Ãµá»Ã´á»“á»‘á»•á»—á»™Æ¡á»á»›á»Ÿá»¡á»£Ã¹Ãºá»§Å©á»¥Æ°á»«á»©á»­á»¯á»±á»³Ã½á»·á»¹á»µÃ€Ãáº¢Ãƒáº Ã‚áº¦áº¤áº¨áºªáº¬Ä‚áº°áº®áº²áº´áº¶ÃˆÃ‰áººáº¼áº¸ÃŠá»€áº¾á»‚á»„á»†ÄÃŒÃá»ˆÄ¨á»ŠÃ’Ã“á»ŽÃ•á»ŒÃ”á»’á»á»”á»–á»˜Æ á»œá»šá»žá» á»¢Ã™Ãšá»¦Å¨á»¤Æ¯á»ªá»¨á»¬á»®á»°á»²Ãá»¶á»¸á»´Ã‚Ä‚ÄÃ”Æ Æ¯';
	this.UnicodeToKoDau = function(input)
	{
		var retVal = '';
		input = this.trim(input);
		var s = input.split('');
		var arr_KoDauChars = this.KoDauChars.split('');
		var pos;
		for (var i = 0; i < s.length; i++)
		{
			pos = this.uniChars.indexOf(s[i]);
			if (pos >= 0)
			retVal+= arr_KoDauChars[pos];
			else
			retVal+= s[i];
		}
		return retVal;
	}
	this.UnicodeToKoDauAndGach = function(input)
	{
		var strChar = 'abcdefghiklmnopqrstxyzuvxw0123456789 ';
		input = this.trim(input);
		var str = input.replace("â€“", "");
		str = str.replace("  ", " ");
		str = this.UnicodeToKoDau(str.toLowerCase());
		var s = str.split('');
		var sReturn = "";
		for (var i = 0; i < s.length; i++)
		{
			if (strChar.indexOf(s[i]) >-1)
			{
				if (s[i] != ' ')
				sReturn+= s[i];
				else if (i > 0 && s[i-1] != ' ' && s[i-1] != '-')
				sReturn+= "-";
			}
		}
		return sReturn;
	}
}

/* Copyright (c) 2006 Brandon Aaron (http://brandonaaron.net)
* Dual licensed under the MIT (http://www.opensource.org/licenses/mit-license.php)
* and GPL (http://www.opensource.org/licenses/gpl-license.php) licenses.
*
* $LastChangedDate: 2007-07-22 01:45:56+0200 (Son, 22 Jul 2007) $
* $Rev: 2447 $
*
* Version 2.1.1
*/
(function($){$.fn.bgIframe=$.fn.bgiframe=function(s){if($.browser.msie&&/6.0/.test(navigator.userAgent)){s=$.extend({top:'auto',left:'auto',width:'auto',height:'auto',opacity:true,src:'javascript:false;'},s||{});var prop=function(n){return n&&n.constructor==Number?n+'px':n;},html='<iframe class="bgiframe"frameborder="0"tabindex="-1"src="'+s.src+'"'+'style="display:block;position:absolute;z-index:-1;'+(s.opacity!==false?'filter:Alpha(Opacity=\'0\');':'')+'top:'+(s.top=='auto'?'expression(((parseInt(this.parentNode.currentStyle.borderTopWidth)||0)*-1)+\'px\')':prop(s.top))+';'+'left:'+(s.left=='auto'?'expression(((parseInt(this.parentNode.currentStyle.borderLeftWidth)||0)*-1)+\'px\')':prop(s.left))+';'+'width:'+(s.width=='auto'?'expression(this.parentNode.offsetWidth+\'px\')':prop(s.width))+';'+'height:'+(s.height=='auto'?'expression(this.parentNode.offsetHeight+\'px\')':prop(s.height))+';'+'"/>';return this.each(function(){if($('> iframe.bgiframe',this).length==0)this.insertBefore(document.createElement(html),this.firstChild);});}return this;};})
(jQuery);
/* Copyright (c) 2007 Paul Bakaus (paul.bakaus@googlemail.com) and Brandon Aaron (brandon.aaron@gmail.com || http://brandonaaron.net) * Dual licensed under the MIT (http://www.opensource.org/licenses/mit-license.php)
 * and GPL (http://www.opensource.org/licenses/gpl-license.php) licenses.
 *
 * $LastChangedDate: 2007-09-11 05:38:31+0300 (Ð’Ñ‚, 11 ÑÐµÐ½ 2007) $
 * $Rev: 3238 $
 *
 * Version: @VERSION
 *
 * Requires: jQuery 1.2+*/
(function($){
	$.dimensions = {
		version: '@VERSION'
	};
	// Create innerHeight, innerWidth, outerHeight and outerWidth methods
	$.each( [ 'Height', 'Width' ], function(i, name){
		
		// innerHeight and innerWidth
		$.fn[ 'inner'+name ] = function() {
			if (!this[0]) return;
			
			var torl = name == 'Height' ? 'Top'    : 'Left',  // top or left
				borr = name == 'Height' ? 'Bottom' : 'Right'; // bottom or right
			
			return this[ name.toLowerCase() ]()+num(this, 'padding'+torl)+num(this, 'padding'+borr);
		};
		
		// outerHeight and outerWidth
		$.fn[ 'outer'+name ] = function(options) {
			if (!this[0]) return;
			
			var torl = name == 'Height' ? 'Top'    : 'Left',  // top or left
				borr = name == 'Height' ? 'Bottom' : 'Right'; // bottom or right
			
			options = $.extend({ margin: false }, options || {});
			
			return this[ name.toLowerCase() ]()
					+num(this, 'border'+torl+'Width')+num(this, 'border'+borr+'Width')
					+num(this, 'padding'+torl)+num(this, 'padding'+borr)
					+(options.margin ? (num(this, 'margin'+torl)+num(this, 'margin'+borr)) : 0);
		};
	});
	// Create scrollLeft and scrollTop methods
	$.each( ['Left', 'Top'], function(i, name) {
		$.fn[ 'scroll'+name ] = function(val) {
			if (!this[0]) return;
			
			return val != undefined ?
			
				// Set the scroll offset
				this.each(function() {
					this == window || this == document ?
						window.scrollTo( 
							name == 'Left' ? val : $(window)[ 'scrollLeft' ](),
							name == 'Top'  ? val : $(window)[ 'scrollTop'  ]()
						) :
						this[ 'scroll'+name ] = val;
				}) :
				
				// Return the scroll offset
				this[0] == window || this[0] == document ?
					self[ (name == 'Left' ? 'pageXOffset' : 'pageYOffset') ] ||
						$.boxModel && document.documentElement[ 'scroll'+name ] ||
						document.body[ 'scroll'+name ] :
					this[0][ 'scroll'+name ];
		};
	});

	$.fn.extend({
		position: function() {
			var left = 0, top = 0, elem = this[0], offset, parentOffset, offsetParent, results;
			
			if (elem) {
				// Get *real* offsetParent
				offsetParent = this.offsetParent();
				
				// Get correct offsets
				offset       = this.offset();
				parentOffset = offsetParent.offset();
				
				// Subtract element margins
				offset.top -= num(elem, 'marginTop');
				offset.left-= num(elem, 'marginLeft');
				
				// Add offsetParent borders
				parentOffset.top += num(offsetParent, 'borderTopWidth');
				parentOffset.left+= num(offsetParent, 'borderLeftWidth');
				
				// Subtract the two offsets
				results = {
					top:  offset.top -parentOffset.top,
					left: offset.left-parentOffset.left
				};
			}
			
			return results;
		},
		
		offsetParent: function() {
			var offsetParent = this[0].offsetParent;
			while ( offsetParent && (!/^body|html$/i.test(offsetParent.tagName) && $.css(offsetParent, 'position') == 'static') )
				offsetParent = offsetParent.offsetParent;
			return $(offsetParent);
		}
	});

	var num = function(el, prop) {
		return parseInt($.css(el.jquery?el[0]:el,prop))||0;
	};
})(jQuery);
(function($) {
	$.fn.extend({
		autocomplete: function(urlOrData, options) {
			var isUrl = typeof urlOrData == "string";
			options = $.extend({}, $.Autocompleter.defaults, {
				url: isUrl ? urlOrData : null,
				data: isUrl ? null : urlOrData,
				delay: isUrl ? $.Autocompleter.defaults.delay : 5,
				max: options && !options.scroll ? 50 : 150
			}, options);
			options.highlight = options.highlight || function(value) {return value; };
			options.moreItems = options.moreItems || "";
			return this.each(function() {
				new $.Autocompleter(this, options);
			});
		},
		result: function(handler) {
			return this.bind("result", handler);
		},
		search: function(handler) {
			return this.trigger("search", [handler]);
		},
		flushCache: function() {
			return this.trigger("flushCache");
		},
		setOptions: function(options){
			return this.trigger("setOptions", [options]);
		},
		unautocomplete: function() {
			return this.trigger("unautocomplete");
		}
	});
	$.Autocompleter = function(input, options) {

		var KEY = {
			UP: 38,
			DOWN: 40,
			DEL: 46,
			TAB: 9,
			RETURN: 13,
			ESC: 27,
			COMMA: 188,
			PAGEUP: 33,
			PAGEDOWN: 34
		};
		var $input = $(input).attr("autocomplete", "off").addClass(options.inputClass);
		var timeout;
		var previousValue = "";
		var cache = $.Autocompleter.Cache(options);
		var hasFocus = 0;
		var lastKeyPressCode;
		var config = {
			mouseDownOnSelect: false
		};

		var select;
		//lenh lua chon
		select = $.Autocompleter.Select(options, input, selectCurrent, config);

		$input.keydown(function(event) {
			lastKeyPressCode = event.keyCode;
			switch(event.keyCode) {
				case KEY.UP:
					event.preventDefault();
					if ( select.visible() ) {
						select.prev();
					} else {
						onChange(0, true);
					}
					break;
				case KEY.DOWN:
					event.preventDefault();
					if ( select.visible() ) {
						select.next();
					} else {
						onChange(0, true);
					}
					break;
				case KEY.PAGEUP:
					event.preventDefault();
					if ( select.visible() ) {
						select.pageUp();
					} else {
						onChange(0, true);
					}
					break;
				case KEY.PAGEDOWN:
					event.preventDefault();
					if ( select.visible() ) {
						select.pageDown();
					} else {
						onChange(0, true);
					}
					break;
				case options.multiple && $.trim(options.multipleSeparator) == "," && KEY.COMMA:
				case KEY.TAB:
				case KEY.RETURN:
					if( selectCurrent() ){
						if( !options.multiple )
							$input.blur();
						event.preventDefault();
					}
					break;
				case KEY.ESC:
					select.hide();
					break;
				default:
					clearTimeout(timeout);
					timeout = setTimeout(onChange, options.delay);
					break;
			}	
		}).keypress(function() {
		}).focus(function(){
			hasFocus++;
		}).blur(function() {
			hasFocus = 0;
			if (!config.mouseDownOnSelect) {
				hideResults();
			}
		}).click(function() {
			if ( hasFocus++> 1 && !select.visible() ) {
				onChange(0, true);
			}
		}).bind("search", function() {
			var fn = (arguments.length > 1) ? arguments[1] : null;
			function findValueCallback(q, data) {
				var result;
				if( data && data.length ) {
					for (var i=0; i < data.length; i++) {
						if( data[i].result.toLowerCase() == q.toLowerCase() ) {
							result = data[i];
							break;
						}
					}
				}
				if( typeof fn == "function" ) fn(result);
				else $input.trigger("result", result && [result.data, result.value]);
			}
			$.each(trimWords($input.val()), function(i, value) {
				request(value, findValueCallback, findValueCallback);
			});
		}).bind("flushCache", function() {
			cache.flush();
		}).bind("setOptions", function() {
			$.extend(options, arguments[1]);
			if ( "data" in arguments[1] )
				cache.populate();
		}).bind("unautocomplete", function() {
			select.unbind();
			$input.unbind();

		});
		function selectCurrent() {			
			var selected = select.selected();	
			if( !selected )
				return false;
			var v_data = selected.result;	
			arr_result =v_data.split("#")		
			if (options.hideId != '')	
			{
				eval("document.getElementById('"+options.hideId+"').value = '"+arr_result[1]+"'");
				v = arr_result[0];
			}else if (options.hideId1 != '')	
			{
				eval("document.getElementById('"+options.hideId1+"').value = '"+arr_result[2]+"'");
				v = arr_result[0];
			}else{
				v= v_data;
			}			
			if (options.curentId != '')	
			{
				v = eval("document.getElementById('"+options.curentId+"').value");
			}
			previousValue = v;		
			if ( options.multiple ) {
				var words = trimWords($input.val());
				if ( words.length > 1 ) {
					v = words.slice(0, words.length-1).join( options.multipleSeparator )+options.multipleSeparator+v;
				}
				v+= options.multipleSeparator;
			}	
			$input.val(v);	
			hideResultsNow();	
			var gachngang = $.Autocompleter.gachNgang(selected.data.o);
			if(options.LSK)
			{
			}
			else
			if( options.BCTC)
			{
				document.location='/BCTCFull/BCTCFull.aspx?symbol='+selected.data.c+"&type=1&nhom="+document.getElementById("hdNhom").value+"&quy="+document.getElementById("hdIsQuy").value;
			}
			else
			if(!options.Portfolio)
			{
				if(!options.GDNB && !options.tochuc)
				{
					document.location =autocomplete_GetCompanyInfoLink(selected.data.c);// "http://cafef.vn/Thi-truong-niem-yet/Thong-tin-cong-ty/"+selected.data.c+".chn";
				}
				else if(!options.tochuc)
				{
					var url=window.location.href;
					var host=window.location.host;
					var i=url.indexOf('tab-');
					var tab=url.substring(i+4,i+5);
					document.location='';
				}
				else
				{
					document.location='';
				}
			}
			else
			{	
				//alert(document.getElementById(options.hideId).value);
				if (options.NextFocusControlId != '')
				{	
					var nextControl = document.getElementById('txt_search_id');

					if (nextControl)
					{	
						nextControl.select();			
						nextControl.focus();
						var nextControl = document.getElementById(options.NextFocusControlId);
						if (nextControl)
						{		
							nextControl.select();			
							nextControl.focus();
						}
						
					}
				}
			}
			//hailt 05/06/2012 them vao de thuc hien 1 js sau khi chon 1 dong trong suggestion
			if(options.js_can_goi_khi_chon_1_dong!=null && options.js_can_goi_khi_chon_1_dong!=''){
				eval(options.js_can_goi_khi_chon_1_dong);
			}
			return true;
		}
		/*======================================*/
		function onChange(crap, skipPrevCheck) {
			if( lastKeyPressCode == KEY.DEL ) {
				select.hide();
				return;
			}
			var currentValue = $input.val();
			if ( !skipPrevCheck && currentValue == previousValue )
				return;
			previousValue = currentValue;
			currentValue = lastWord(currentValue);
			if ( currentValue.length >= options.minChars) {
				$input.addClass(options.loadingClass);
				if (!options.matchCase)
				currentValue = currentValue.toLowerCase();
				request(currentValue, receiveData, hideResultsNow);
			} else {
				stopLoading();
				select.hide();
			}
		};
		function trimWords(value) {
			if ( !value ) {
				return [""];
			}
			var words = value.split( $.trim( options.multipleSeparator ) );
			var result = [];
			$.each(words, function(i, value) {
				if ( $.trim(value) )
				result[i] = $.trim(value);
			});
			return result;
		}
		function lastWord(value) {
			if ( !options.multiple )
				return value;
			var words = trimWords(value);
			return words[words.length-1];
		}
		function autoFill(q, sValue){
			if( options.autoFill && (lastWord($input.val()).toLowerCase() == q.toLowerCase()) && lastKeyPressCode != 8 ) {
				$input.val($input.val()+sValue.substring(lastWord(previousValue).length));
				$.Autocompleter.Selection(input, previousValue.length, previousValue.length+sValue.length);
			}
		};
		function hideResults() {
			clearTimeout(timeout);
			timeout = setTimeout(hideResultsNow, 200);
		};
		function hideResultsNow() {
			select.hide();
			clearTimeout(timeout);
			stopLoading();
			if (options.mustMatch) {
				$input.search(
				function (result){
					if( !result ) $input.val("");
				}
				);
			}
		};
		function receiveData(q, data) {
			if (data && data.length && hasFocus ) {
				stopLoading();
				select.display(data, q);
				autoFill(q, data[0].value);
				select.show();
			} else {
				hideResultsNow();
			}
		};
		function request(term, success, failure) {
			if (!options.matchCase)
			term = term.toLowerCase();
			var data = cache.load(term);
			if (data && data.length) {
				success(term, data);
			} else if( (typeof options.url == "string") && (options.url.length > 0) ){
			var extraParams = {};
			$.each(options.extraParams, function(key, param) {
				extraParams[key] = typeof param == "function" ? param() : param;
			});
			$.ajax({
				mode: "abort",
				port: "autocomplete"+input.name,
				dataType: options.dataType,
				url: options.url,
				data: $.extend({
					q: lastWord(term),
					limit: options.max
				}, extraParams),
				success: function(data) {
					var parsed = options.parse && options.parse(data) || parse(data);
					cache.add(term, parsed);
					success(term, parsed);
				}
				});
			} else {
				failure(term);
			}
		};
		function parse(data) {
			var parsed = [];
			var rows = data.split("\n");
			for (var i=0; i < rows.length; i++) {
			var row = $.trim(rows[i]);
			if (row) {
				row = row.split("|");
				parsed[parsed.length] = {
					data: row,
					value: row[0],
					result: options.formatResult && options.formatResult(row, row[0]) || row[0]
				};
			}
			}
			return parsed;
		};
		function stopLoading() {
			$input.removeClass(options.loadingClass);
		};
	};
	$.Autocompleter.gachNgang = function(keyword)
	{
		var len = keyword.length;
		var str = '', c;
		for(i=0; i < len; i++)
		{
			c = keyword.charCodeAt(i);
			str+= (c == 32)? '-' : keyword.charAt(i);
		}
		var st = str.indexOf('---');
		if (st!=-1) str = str.substring(0,st)+'-'+str.substring(st+3);
		return str;
	}
	$.Autocompleter.supercut = function(keyword)
	{
		var len = keyword.length;
		var str = '', c;
		for(i=0; i < len; i++)
		{
			c = keyword.charCodeAt(i);
			if(( c>= 192 && c <= 195) || ( c>= 224 && c <= 227) || c==258 || c==259 || ( c>= 461 && c <= 7863))
			{
				str+='a';
			}else
				if(c==272 || c==273 )
				{
					str+='d';
				}else
					if((c>=200 && c<=202) || (c>=232 && c<=234) || ( c>= 7864 && c <= 7879))
					{
						str+='e';
					}else
						if(c==204 || c==205 ||c==236 || c==237 ||c==296 || c==297 || ( c>= 7880 && c <= 7883))
						{
							str+='i';
						}else
							if(c==217 || c==218 || c==249 || c==250 || c==360 || c==361 || c==431 || c==432 || ( c>= 7908 && c <= 7921))
							{
								str+='u';
							}else
								if((c>=210 && c<=213) || (c>=242 && c<=245) || c==416 || c==417 || ( c>= 7884 && c <= 7907))
								{
									str+='o';
								} else
									if(c==221 || c==253 || (c>= 7922 && c <= 7929))
								{
									str+='y';
								} else
									str+= keyword.charAt(i);
		}
		return str;
	}
	$.Autocompleter.checkdau = function(sText)
	{
		var ValidChars = "Ã Ã¡áº£Ã£áº¡Ã¢áº§áº¥áº©áº«áº­Äƒáº±áº¯áº³áºµáº·Ã¨Ã©áº»áº½áº¹Ãªá»áº¿á»ƒá»…á»‡Ä‘Ã¬Ã­á»‰Ä©á»‹Ã²Ã³á»Ãµá»Ã´á»“á»‘á»•á»—á»™Æ¡á»á»›á»Ÿá»¡á»£Ã¹Ãºá»§Å©á»¥Æ°á»«á»©á»­á»¯á»±á»³Ã½á»·á»¹á»µÃ€Ãáº¢Ãƒáº Ã‚áº¦áº¤áº¨áºªáº¬Ä‚áº°áº®áº²áº´áº¶ÃˆÃ‰áººáº¼áº¸ÃŠá»€áº¾á»‚á»„á»†ÄÃŒÃá»ˆÄ¨á»ŠÃ’Ã“á»ŽÃ•á»ŒÃ”á»’á»á»”á»–á»˜Æ á»œá»šá»žá» á»¢Ã™Ãšá»¦Å¨á»¤Æ¯á»ªá»¨á»¬á»®á»°á»²Ãá»¶á»¸á»´Ã‚Ä‚ÄÃ”Æ Æ¯";
		var codau = false;
		var Char;
		for (i = 0; i < sText.length && codau == false; i++)
		{
			Char = sText.charAt(i);
			if (ValidChars.indexOf(Char) !=-1)
			{
				codau = true;
			}
		}
		return codau;
	}
	$.Autocompleter.defaults = {
		js_can_goi_khi_chon_1_dong: "",
		inputClass: "ac_input",
		resultsClass: "ac_results",
		loadingClass: "ac_loading",
		minChars: 1,
		delay: 400,
		matchCase: false,
		matchSubset: true,
		matchContains: false,
		cacheLength: 10,
		max: 100,
		mustMatch: false,
		extraParams: {},
		selectFirst: true,
		formatItem: function(row) { return row[0]; },
		moreItems: "",
		autoFill: false,
		width: 0,
		multiple: false,
		Portfolio:false,
		BCTC:false,
		GDNB:false,
		LSK:false,
		tochuc:false,
		NextFocusControlId:'',
		hideId:'',
		hideId1:'',
		curentId:'',
		multipleSeparator: ", ",
		highlight: function(value, term) {
			var kby = value.toLowerCase().indexOf( "@" );
			value = value.substring(0,kby);
			if ( $.Autocompleter.checkdau( term.toLowerCase() ) == true ){
				var st = value.toLowerCase().indexOf( term.toLowerCase() );
			}
			else {
				var kby = $.Autocompleter.supercut(value);
				var st = kby.toLowerCase().indexOf(term.toLowerCase() );
			}
			var output = value.substring(0,st)+"<em>"+value.substring(st, st+term.length)+"</em>"+value.substring(st+term.length);
			return output;
		},
		scroll: false,
		scrollHeight: 180,
		attachTo: 'body',
		isTargetUrl:false,
		TinChungKhoan:false,
		isAddSymbolToFavorite: false,
		CafeF_StockSymbolSlideObject: null
	};
	$.Autocompleter.Cache = function(options) {
		var data = {};
		var length = 0;
		function matchSubset(s, sub) {
			if (!options.matchCase)
				s = s.toLowerCase();
			var i = s.indexOf(sub);
			if (i ==-1) return false;
			return i == 0 || options.matchContains;
		};
		function add(q, value) {
			if (length > options.cacheLength){
				flush();
			}
			if (!data[q]){
				length++;
			}
			data[q] = value;
		}
		function populate(){
			if( !options.data ) return false;
			var stMatchSets = {},
			nullData = 0;
			if( !options.url ) options.cacheLength = 1;
			stMatchSets[""] = [];
			for ( var i = 0, ol = options.data.length; i < ol; i++) {
				var rawValue = options.data[i];
				rawValue = (typeof rawValue == "string") ? [rawValue] : rawValue;
				var value = options.formatItem(rawValue, i+1, options.data.length);
				if ( value === false )
					continue;
				var firstChar = value.charAt(0).toLowerCase();
				if( !stMatchSets[firstChar] )
				stMatchSets[firstChar] = [];
				var row = {
					value: value,
					data: rawValue,
					result: options.formatResult && options.formatResult(rawValue) || value
				};
				stMatchSets[firstChar].push(row);
				if ( nullData++< options.max ) {
					stMatchSets[""].push(row);
				}
			};
			$.each(stMatchSets, function(i, value) {
				options.cacheLength++;
				add(i, value);
			});
		}
		setTimeout(populate, 25);
		function flush(){
			data = {};
			length = 0;
		}
		return {
			flush: flush,
			add: add,
			populate: populate,
			load: function(q) {
				if (!options.cacheLength || !length)
					return null;
				/*
				* if dealing w/local data and matchContains than we must make sure
				* to loop through all the data collections looking for matches
				*/
				if( !options.url && options.matchContains ){
					var csub = [];
					for( var k in data ){
						if( k.length > 0 ){
							var c = data[k];
							$.each(c, function(i, x) {
								if (matchSubset(x.value, q)) {
									csub.push(x);
								}
							});
						}
					}
					return csub;
				} else
					if (data[q]){
						return data[q];
					} else
						if (options.matchSubset) {
							for (var i = q.length-1; i >= options.minChars; i--) {
								var c = data[q.substr(0, i)];
								if (c) {
									var csub = [];
									$.each(c, function(i, x) {
										if (matchSubset(x.value, q)) {
											csub[csub.length] = x;
										}
									});
									return csub;
								}
							}
						}
				return null;
			}
		};
	};
	$.Autocompleter.Select = function (options, input, select, config) {
		var CLASSES = {
			ACTIVE: "ac_over"
		};
		var listItems,
		active =-1,
		data,
		term = "",
		needsInit = true,
		element,
		list,
		moreItems;
		function init() {
			if (!needsInit)
				return;
			element = $("<div>")
			.hide()
			.addClass(options.resultsClass)
			.css("position", "absolute")
			.appendTo(options.attachTo);
			list = $("<ul>").appendTo(element).mouseover( function(event) {
				if(target(event).nodeName && target(event).nodeName.toUpperCase() == 'LI') {
					active = $("li", list).removeClass().index(target(event));
					$(target(event)).addClass(CLASSES.ACTIVE);
				}
			}).click(function(event) {
				$(target(event)).addClass(CLASSES.ACTIVE);
				select();
				input.focus();
				return false;
			}).mousedown(function() {
				config.mouseDownOnSelect = true;
			}).mouseup(function() {
				config.mouseDownOnSelect = false;
			});
			if( options.moreItems.length > 0 )
				moreItems = $("<div>")
			.addClass("ac_moreItems")
			.css("display", "none")
			.html(options.moreItems)
			.appendTo(element);
			if( options.width > 0 )
				element.css("width", options.width);
			LogoItems = $("<div>")
			//.html("<img src='http://solieu6.cafef.vn/www/vneconomy/images/img_cafef.gif'>")
			.css("text-align","center")
			.css("background-color","#FFFFFF")
			.css("width",0)
			.appendTo(element);
			needsInit = false;
		}
		function target(event) {
			var element = event.target;
			while(element && element.tagName != "LI")
			element = element.parentNode;
			if(!element)
				return [];
			return element;
		}
		function moveSelect(step) {
			listItems.slice(active, active+1).removeClass();
			movePosition(step);
			var activeItem = listItems.slice(active, active+1).addClass(CLASSES.ACTIVE);
			if(options.scroll) {
				var offset = 0;
				listItems.slice(0, active).each(function() {
					offset+= this.offsetHeight;
				});
				if((offset+activeItem[0].offsetHeight-list.scrollTop()) > list[0].clientHeight) {
					list.scrollTop(offset+activeItem[0].offsetHeight-list.innerHeight());
				} else if(offset < list.scrollTop()) {
					list.scrollTop(offset);
				}
			}
		};
		function movePosition(step) {
			active+= step;
			if (active < 0) {
				active = listItems.size()-1;
			} else if (active >= listItems.size()) {
				active = 0;
			}
		}
		function limitNumberOfItems(available) {
			return options.max && options.max < available
			? options.max
			: available;
		}
		function fillList() {
			list.empty();
			var max = limitNumberOfItems(data.length);
			var realMax = 0;
			var NumItemSelected=0;
			var str="";
			for (var i=0; i < data.length; i++) {
				if (!data[i]) continue;
				var formatted = options.formatItem(data[i].data, i+1, max, data[i].value, term);
				if ( formatted === false )continue;
				var arr = formatted.split('@');
				if (arr[0].toLowerCase().indexOf(term.toLowerCase()) == 0)
				{
					var li = $("<li>").html( options.highlight(formatted, term) ).appendTo(list)[0];
					$.data(li, "ac_data", data[i]);
					str+= i+",";
					NumItemSelected++;
				}
				if(NumItemSelected==max) break;
			}
			if(NumItemSelected<max)
			{
				for (var i=0; i < max; i++) {
					if (!data[i]) continue;
					var formatted = options.formatItem(data[i].data, i+1, max, data[i].value, term);
					if ( formatted === false )continue;
					var arr = formatted.split('@');
					if(notinarray(str,i))
					{
						var li = $("<li>").html( options.highlight(formatted, term) ).appendTo(list)[0];
						$.data(li, "ac_data", data[i]);
					}
				}
			}
			listItems = list.find("li");
			if ( options.selectFirst ) {
				listItems.slice(0, 1).addClass(CLASSES.ACTIVE);
				active = 0;
			}
			if( options.moreItems.length > 0 && !options.scroll)
				moreItems.css("display", (data.length > max)? "block" : "none");
			list.bgiframe();
		}
		function notinarray(string, i)
		{
			var ids = string.split(',');
			for(j=0;j<ids.length-1;j++)
			{
				if(i==ids[j])
				{
					return false;
				}
			}
			return true;
		}
		return {
			display: function(d, q) {
				init();
				data = d;
				term = q;
				fillList();
			},
			next: function() {
				moveSelect(1);
			},
			prev: function() {
				moveSelect(-1);
			},
			pageUp: function() {
				if (active != 0 && active-8 < 0) {
				moveSelect(-active );
				} else {
				moveSelect(-8);
				}
			},
			pageDown: function() {
				if (active != listItems.size()-1 && active+8 > listItems.size()) {
					moveSelect( listItems.size()-1-active );
				} else {
					moveSelect(8);
				}
			},
			hide: function() {
				element && element.hide();
				active =-1;
			},
			visible : function() {
				return element && element.is(":visible");
			},
			current: function() {
				return this.visible() && (listItems.filter("."+CLASSES.ACTIVE)[0] || options.selectFirst && listItems[0]);
			},
			show: function() {
				var offset = $(input).offset();
				element.css({
					width: typeof options.width == "string" || options.width > 0 ? options.width : $(input).width(),
					top: offset.top+input.offsetHeight,
					left: offset.left
				}).show();
				if(options.scroll) {
					list.scrollTop(0);
					list.css({
						maxHeight: options.scrollHeight,
						overflow: 'auto'
					});
					if($.browser.msie && typeof document.body.style.maxHeight === "undefined") {
						var listHeight = 0;
						listItems.each(function() {
							listHeight+= this.offsetHeight;
						});
						var scrollbarsVisible = listHeight > options.scrollHeight;
						list.css('height', scrollbarsVisible ? options.scrollHeight : listHeight );
						if (!scrollbarsVisible) {
							listItems.width( list.width()-parseInt(listItems.css("padding-left"))-parseInt(listItems.css("padding-right")) );
						}
					}
				}
			},
			selected: function() {
				return listItems && $.data(listItems.filter("."+CLASSES.ACTIVE)[0], "ac_data");
			},
			unbind: function() {
				element && element.remove();
			}
		};
	};
	$.Autocompleter.Selection = function(field, start, end) {
		if( field.createTextRange ){
			var selRange = field.createTextRange();
			selRange.collapse(true);
			selRange.moveStart("character", start);
			selRange.moveEnd("character", end);
			selRange.select();
		} else if( field.setSelectionRange ){
			field.setSelectionRange(start, end);
		} else {
			if( field.selectionStart ){
				field.selectionStart = start;
				field.selectionEnd = end;
			}
		}
		field.focus();
	};
})(jQuery);