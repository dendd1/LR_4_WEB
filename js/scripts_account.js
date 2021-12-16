var accaunt_btn_1 = document.getElementById('accaunt');
var accaunt_btn_2 = document.getElementById('more_info');
var accaunt_btn_3 = document.getElementById('library_btn');
var accaunt_btn_4 = document.getElementById('news_btn');

var active_btn = 'accaunt';
var active_sect = 'accaunt_content';

var flex = "flex";
var inline = "inline";

function change_info_active_btn(doc, stat, nv_sect, nv_btn)
{
      document.getElementById(active_btn).classList.remove('active');
      document.getElementById(active_sect).style.display = "none";
      doc.classList.add('active');
      document.getElementById(nv_sect).style.display = stat;
      active_btn = nv_btn;
      active_sect = nv_sect;
}


accaunt_btn_1.onclick = function(){ change_info_active_btn(accaunt_btn_1, flex, "accaunt_content", "accaunt");};
accaunt_btn_2.onclick = function(){ change_info_active_btn(accaunt_btn_2, flex, "more_info_content", "more_info");};
accaunt_btn_3.onclick = function(){ change_info_active_btn(accaunt_btn_3, inline, "library", "library_btn");};
accaunt_btn_4.onclick = function(){ change_info_active_btn(accaunt_btn_4, inline, "news", "news_btn");};
