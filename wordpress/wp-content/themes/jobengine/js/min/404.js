jQuery(document).ready(function(e){var t=e("#google-url").html(),n=e(location).attr("href").replace(t,""),r=n.split("/"),s="";for(i=0;i<r.length;i++){s+=r[i]+" "}e('<input type="text" id="google-key" name="q" value="'+s+'">').appendTo(e("#google-search"))})