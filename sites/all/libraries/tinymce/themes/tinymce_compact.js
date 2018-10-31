tinyMCE.init({
  mode : "exact",
  theme : "advanced",
  elements : "edit-body",
  relative_urls : false,
  plugins : "devkit,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras",
  theme_advanced_buttons1_add : "fontselect,fontsizeselect",
  theme_advanced_buttons2_add : "separator,insertdate,inserttime,preview,separator,forecolor,backcolor,advsearchreplace",
  theme_advanced_buttons2_add_before: "cut,copy,paste,pastetext,pasteword,separator,search,replace,separator",
  theme_advanced_buttons3_add_before : "tablecontrols,separator",
  theme_advanced_buttons3_add : "emotions,iespell,media,advhr",
  theme_advanced_buttons4 : "",
  theme_advanced_toolbar_location : "top",
  theme_advanced_toolbar_align : "left",
  theme_advanced_path_location : "bottom",
  content_css : "example_full.css",
  plugin_insertdate_dateFormat : "%Y-%m-%d",
  plugin_insertdate_timeFormat : "%H:%M:%S",
  file_browser_callback : "fileBrowserCallBack",
  theme_advanced_resize_horizontal : false,
  theme_advanced_resizing : true,
  nonbreaking_force_tab : true,
  apply_source_formatting : true
});