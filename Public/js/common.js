function check_form(form_id) {
  last_submit = $('#' + form_id).data('last_submit');
  current_submit = new Date().getTime(); // 当前提交
  if(last_submit == undefined) {
    $('#' + form_id).data('last_submit', new Date().getTime());
  } else {
    if (current_submit - last_submit > 600) {     //避免重复提交
			$('#' + form_id).data('last_submit', new Date().getTime());
		} else {
			return false;
		}
  }

  var check_flag = true;
  // ui_error(123);
  $("#" + form_id + " :input").each(function(i) {
    // ui_error(123);
    if ($(this).attr("check")) {
      if (!validate($(this).val(), $(this).attr("check"))) {  //验证数据类型
        ui_error($(this).attr("msg"));
        $(this).focus();
        check_flag = false;
        return check_flag;
      }
    }
  });
  return check_flag;
}

function validate(data, datatype) {
	if (datatype.indexOf("|")) {
		tmp = datatype.split("|");
		datatype = tmp[0];
		data2 = tmp[1];
	}
	switch (datatype) {
    case "score":
      newData = parseInt(data)
      if (newData >= 0 && newData <= 100) {
        return true;
      } else {
        return false;
      }
      break;
  	case "require":
  		if (data == "") {
  			return false;
  		} else {
  			return true;
  		}
  		break;
  	case "email":
  		var reg = /^([0-9A-Za-z\-_\.]+)@([0-9a-z]+\.[a-z]{2,3}(\.[a-z]{2})?)$/g;
  		return reg.test(data);
  		break;
  	case "number":
  		var reg = /^[0-9]+\.{0,1}[0-9]{0,3}$/;
  		return reg.test(data);
  		break;
  	case "html":
  		var reg = /<...>/;
  		return reg.test(data);
  		break;
  	case "eqt":
  		data2 = $("#" + data2).val();
  		return data >= data2;
  		break;
	}
}

function ui_error(msg) {
  alert(msg);
}

function sendForm(formId) {
  $("#" + formId).submit();
	// if (check_form(formId)) {   //检查表单
  //     // ui_error('检查完' + formId);
  //     // ui_error('检查完');
	// 	//绑定beforeunload事件
	// 		// $("#" + formId).attr("action", post_url);
	// 		// if (return_url) {
	// 		// 	set_cookie('return_url', return_url);
	// 		// }
	// 		$("#" + formId).submit();
	// } else {
  //   ui_error('表单出错');
  // }
}


/*设置要返回的URL*/
function set_return_url(url, level) {
    if (url != undefined) {
        if (level != undefined) {
            set_cookie("return_url_" + level, url);
        } else {
            set_cookie("return_url", url);
        }
    } else {
        set_cookie("return_url", document.location);
    }
}



/*设置 cookie*/
function set_cookie(key, value, exp, path, domain, secure) {
    key = cookie_prefix + key;
    path = "/";
    var cookie_string = key + "=" + escape(value);
    if (exp) {
        cookie_string += "; expires=" + exp.toGMTString();
    }
    if (path)
        cookie_string += "; path=" + escape(path);
    if (domain)
        cookie_string += "; domain=" + escape(domain);
    if (secure)
        cookie_string += "; secure";
    document.cookie = cookie_string;
}

/*读取 cookie*/
function get_cookie(cookie_name) {
    cookie_name = cookie_prefix + cookie_name;
    var results = document.cookie.match('(^|;) ?' + cookie_name + '=([^;]*)(;|$)');
    if (results)
        return (unescape(results[2]));
    else
        return null;
}

function selecttime(flag){
    if(flag==1){
        var endTime = $("#countTimeend").val();
        if(endTime != ""){
            WdatePicker({dateFmt:'yyyy-MM-dd HH:mm',maxDate:endTime})}else{
            WdatePicker({dateFmt:'yyyy-MM-dd HH:mm'})}
    }else{
        var startTime = $("#countTimestart").val();
        if(startTime != ""){
            WdatePicker({dateFmt:'yyyy-MM-dd HH:mm',minDate:startTime})}else{
            WdatePicker({dateFmt:'yyyy-MM-dd HH:mm'})}
    }
}
