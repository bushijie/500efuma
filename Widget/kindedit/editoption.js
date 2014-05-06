KindEditor.ready(function(K) {
	K.create('#edit', {
		width : '100%',
		height: '400px',
		// minWidth: '780px',
		minHeight: '400px',
		resizeType:1 ,
		newlineTag:'br',
		cssPath : '/500efuma/Template/css/codestyle.css',
		items : ['bold','underline','italic','strikethrough','removeformat','|', 
		         'justifyleft','justifycenter','justifyright','formatblock','insertorderedlist', 'insertunorderedlist','|',
		         'forecolor','hilitecolor','fontname','fontsize','|',
		         'link','unlink','codelight','emoticons','image','flash','table','insertfile','|',
		         'fullscreen','preview','about']
		
	});
	window.editor = K.create('#edit');
});

