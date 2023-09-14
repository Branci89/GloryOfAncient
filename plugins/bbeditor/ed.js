/*****************************************/
// Name: Javascript Textarea BBCode Markup Editor
// Version: 1.3
// Author: Balakrishnan
// Last Modified Date: 25/jan/2009
// License: Free
// URL: http://www.corpocrat.com
/******************************************/

var textarea;
var content;
document.write("<link href=\"themes/advanced/forum.css\" rel=\"stylesheet\" type=\"text/css\">");


function edToolbar(obj) {
   document.write("<div class=\"toolbar\">");
	document.write("<img class=\"button\" src=\"plugins/bbeditor/images/edit-bold.png\" name=\"btnBold\" title=\"Grassetto\" onClick=\"doAddTags('[b]','[/b]','" + obj + "')\">");
    document.write("<img class=\"button\" src=\"plugins/bbeditor/images/edit-italic.png\" name=\"btnItalic\" title=\"Corsivo\" onClick=\"doAddTags('[i]','[/i]','" + obj + "')\">");
	document.write("<img class=\"button\" src=\"plugins/bbeditor/images/edit-underline.png\" name=\"btnUnderline\" title=\"Sottolineato\" onClick=\"doAddTags('[u]','[/u]','" + obj + "')\">");
	document.write("<img class=\"button\" src=\"plugins/bbeditor/images/edit-strike.png\" name=\"btnUnderline\" title=\"Sbarrato\" onClick=\"doAddTags('[s]','[/s]','" + obj + "')\">");
	document.write("<img class=\"button\" src=\"plugins/bbeditor/images/color.png\" name=\"btnColor\" title=\"Colorato\" onClick=\"doCOL('" + obj + "')\">");
	document.write("<img class=\"button\" src=\"plugins/bbeditor/images/edit-alignment.png\" name=\"btnSx\" title=\"Allineamento Sinistra\" onClick=\"doAddTags('[left]','[/left]','" + obj + "')\">");
	document.write("<img class=\"button\" src=\"plugins/bbeditor/images/edit-alignment-center.png\" name=\"btnCentro\" title=\"Allineamento Centrato\" onClick=\"doAddTags('[center]','[/center]','" + obj + "')\">");
	document.write("<img class=\"button\" src=\"plugins/bbeditor/images/edit-alignment-right.png\" name=\"btnDx\" title=\"Allineamento Destra\" onClick=\"doAddTags('[right]','[/right]','" + obj + "')\">");
	document.write("<img class=\"button\" src=\"plugins/bbeditor/images/edit-alignment-justify.png\" name=\"btnJust\" title=\"Giustificato\" onClick=\"doAddTags('[justify]','[/justify]','" + obj + "')\">");
	document.write("<img class=\"button\" src=\"plugins/bbeditor/images/zone-share.png\" name=\"btnLink\" title=\"Link\" onClick=\"doURL('" + obj + "')\">");
	document.write("<img class=\"button\" src=\"plugins/bbeditor/images/image-sunset.png\" name=\"btnPicture\" title=\"Immagine\" onClick=\"doImage('" + obj + "')\">");
	//document.write("<img class=\"button\" src=\"plugins/bbeditor/images/ordered.gif\" name=\"btnList\" title=\"Ordered List\" onClick=\"doList('[LIST=1]','[/LIST]','" + obj + "')\">");
	document.write("<img class=\"button\" src=\"plugins/bbeditor/images/edit-list.png\" name=\"btnList\" title=\"Unordered List\" onClick=\"doList('','','" + obj + "')\">");
	document.write("<img class=\"button\" src=\"plugins/bbeditor/images/edit-quotation.png\" name=\"btnQuote\" title=\"Quota\" onClick=\"doAddTags('[quote]','[/quote]','" + obj + "')\">"); 
  	//document.write("<img class=\"button\" src=\"plugins/bbeditor/images/edit-code.png\" name=\"btnCode\" title=\"Code\" onClick=\"doAddTags('[code]','[/code]','" + obj + "')\">");
    document.write("</div>");
	//document.write("<textarea id=\""+ obj +"\" name = \"" + obj + "\" cols=\"" + width + "\" rows=\"" + height + "\"></textarea>");
				}

function doImage(obj)
{
textarea = document.getElementById(obj);
var url = prompt('Inserisci il link immagine','http://');
var scrollTop = textarea.scrollTop;
var scrollLeft = textarea.scrollLeft;

if (url != '' && url != null) {

	if (document.selection) 
			{
				textarea.focus();
				var sel = document.selection.createRange();
				sel.text = '[img]' + url + '[/img]';
			}
   else 
    {
		var len = textarea.value.length;
	    var start = textarea.selectionStart;
		var end = textarea.selectionEnd;
		
        var sel = textarea.value.substring(start, end);
	    //alert(sel);
		var rep = '[img]' + url + '[/img]';
        textarea.value =  textarea.value.substring(0,start) + rep + textarea.value.substring(end,len);
		
			
		textarea.scrollTop = scrollTop;
		textarea.scrollLeft = scrollLeft;
	}
}

}

function doURL(obj)
{
textarea = document.getElementById(obj);
var url = prompt('Inserisci il link (attenzione: il testo selezionato verrà sovrascritto):','http://');
var scrollTop = textarea.scrollTop;
var scrollLeft = textarea.scrollLeft;

if (url != '' && url != null) {

	if (document.selection) 
			{
				textarea.focus();
				var sel = document.selection.createRange();
				
			if(sel.text==""){
					sel.text = '[url]'  + url + '[/url]';
					} else {
					sel.text = '[url]'  + url + '[/url]';
					}			

				//alert(sel.text);
				
			}
   else 
    {
		var len = textarea.value.length;
	    var start = textarea.selectionStart;
		var end = textarea.selectionEnd;
		
        var sel = textarea.value.substring(start, end);
		
		if(sel==""){
				var rep = '[url]' + url + '[/url]';
				} else
				{
				var rep = '[url]' + url + '[/url]';
				}
	    //alert(sel);
		
        textarea.value =  textarea.value.substring(0,start) + rep + textarea.value.substring(end,len);
		
			
		textarea.scrollTop = scrollTop;
		textarea.scrollLeft = scrollLeft;
	}
 }
}

function doCOL(obj)
{
textarea = document.getElementById(obj);
var color = prompt('Inserisci il colore in formato hex a 3/6 cifre o testuale (#333, #333333, grey)','black');
var scrollTop = textarea.scrollTop;
var scrollLeft = textarea.scrollLeft;

if (color != '' && color != null) {

	if (document.selection) 
			{
				textarea.focus();
				var sel = document.selection.createRange();
				
			if(sel.text==""){
					sel.text = '[color='  + color + '][/color]';
					} else {
					sel.text = '[color='  + color + '][/color]';
					}			

				//alert(sel.text);
				
			}
   else 
    {
		var len = textarea.value.length;
	    var start = textarea.selectionStart;
		var end = textarea.selectionEnd;
		
        var sel = textarea.value.substring(start, end);
		
		if(sel==""){
				var rep = '[color='  + color + '][/color]';
				} else
				{
				var rep = '[color='  + color + ']' + sel + '[/color]';
				}
	    //alert(sel);
		
        textarea.value =  textarea.value.substring(0,start) + rep + textarea.value.substring(end,len);
		
			
		textarea.scrollTop = scrollTop;
		textarea.scrollLeft = scrollLeft;
	}
 }
}

function doAddTags(tag1,tag2,obj)
{
textarea = document.getElementById(obj);
	// Code for IE
		if (document.selection) 
			{
				textarea.focus();
				var sel = document.selection.createRange();
				//alert(sel.text);
				sel.text = tag1 + sel.text + tag2;
			}
   else 
    {  // Code for Mozilla Firefox
		var len = textarea.value.length;
	    var start = textarea.selectionStart;
		var end = textarea.selectionEnd;
		
		
		var scrollTop = textarea.scrollTop;
		var scrollLeft = textarea.scrollLeft;

		
        var sel = textarea.value.substring(start, end);
	    //alert(sel);
		var rep = tag1 + sel + tag2;
        textarea.value =  textarea.value.substring(0,start) + rep + textarea.value.substring(end,len);
		
		textarea.scrollTop = scrollTop;
		textarea.scrollLeft = scrollLeft;
		
		
	}
}

function doList(tag1,tag2,obj){
textarea = document.getElementById(obj);
// Code for IE
		if (document.selection) 
			{
				textarea.focus();
				var sel = document.selection.createRange();
				var list = sel.text.split('\n');
		
				for(i=0;i<list.length;i++) 
				{
				list[i] = '[li]' + list[i];
				}
				//alert(list.join("\n"));
				sel.text = list.join("\n");
			} else
			// Code for Firefox
			{

		var len = textarea.value.length;
	    var start = textarea.selectionStart;
		var end = textarea.selectionEnd;
		var i;
		
		var scrollTop = textarea.scrollTop;
		var scrollLeft = textarea.scrollLeft;

		
        var sel = textarea.value.substring(start, end);
	    //alert(sel);
		
		var list = sel.split('\n');
		
		for(i=0;i<list.length;i++) 
		{
		list[i] = '[li]' + list[i];
		}
		//alert(list.join("<br>"));
        
		
		var rep = tag1 + '\n' + list.join("\n") + '\n' +tag2;
		textarea.value =  textarea.value.substring(0,start) + rep + textarea.value.substring(end,len);
		
		textarea.scrollTop = scrollTop;
		textarea.scrollLeft = scrollLeft;
 }
}