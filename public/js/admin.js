function optCKEditor(){return{filebrowserImageBrowseUrl:"/laravel-filemanager?type=Images",filebrowserImageUploadUrl:"/laravel-filemanager/upload?type=Images&_token=",filebrowserBrowseUrl:"/laravel-filemanager?type=Files",filebrowserUploadUrl:"/laravel-filemanager/upload?type=Files&_token="}}function confirmDelete(){return!!window.confirm("Are you sure delete ?")}$(document).ready(function(){$("div.alert").not(".alert-danger").delay(3e3).fadeOut(350),$("#parent_id").chosen(),$("#category_id").chosen(),$("#categories").DataTable(),$("#tags").selectize({plugins:["remove_button"],create:!0,persist:!1,maxItems:null})});