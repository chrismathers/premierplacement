(function(a){function b(){var e=a("#pass1").val(),d=a("#user_login").val(),c=a("#pass2").val(),f;a("#pass-strength-result").removeClass("short bad good strong");if(!e){a("#pass-strength-result").html(pwsL10n.empty);return}f=passwordStrength(e,d,c);switch(f){case 2:a("#pass-strength-result").addClass("bad").html(pwsL10n.bad);break;case 3:a("#pass-strength-result").addClass("good").html(pwsL10n.good);break;case 4:a("#pass-strength-result").addClass("strong").html(pwsL10n.strong);break;case 5:a("#pass-strength-result").addClass("short").html(pwsL10n.mismatch);break;default:a("#pass-strength-result").addClass("short").html(pwsL10n["short"])}}a(document).ready(function(){a("#pass1").val("").keyup(b);a("#pass2").val("").keyup(b);a("#pass-strength-result").show();a(".color-palette").click(function(){a(this).siblings("input[name=admin_color]").attr("checked","checked")});a("#nickname").blur(function(){var e=a(this).val()||a("#user_login").val();var c=a("#display_name");var d=c.children("option:selected").attr("id");c.children("#display_nickname").remove();if(!c.children("option[value="+e+"]").length){c.append('<option id="display_nickname" value="'+e+'">'+e+"</option>")}a("#"+d).attr("selected","selected")});a("#first_name, #last_name").blur(function(){var c=a("#display_name");var f=a("#first_name").val(),d=a("#last_name").val();var e=c.children("option:selected").attr("id");a("#display_firstname, #display_lastname, #display_firstlast, #display_lastfirst").remove();if(f&&!c.children("option[value="+f+"]").length){c.append('<option id="display_firstname" value="'+f+'">'+f+"</option>")}if(d&&!c.children("option[value="+d+"]").length){c.append('<option id="display_lastname" value="'+d+'">'+d+"</option>")}if(f&&d){if(!c.children("option[value="+f+" "+d+"]").length){c.append('<option id="display_firstlast" value="'+f+" "+d+'">'+f+" "+d+"</option>")}if(!c.children("option[value="+d+" "+f+"]").length){c.append('<option id="display_lastfirst" value="'+d+" "+f+'">'+d+" "+f+"</option>")}}a("#"+e).attr("selected","selected")})})})(jQuery);