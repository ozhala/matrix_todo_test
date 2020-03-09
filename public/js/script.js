/**************************************** START Global ****************************************/
var ajax_url                = BASE_URL + "app/ajax.php";
var message_sending_details = '<img src="'+ BASE_URL +'/public/images/loading.gif" style="width:70px; height:70px;">&nbsp;&nbsp;Sending details ...';
var message_problem         = '<label>There\'s a problem, please try again later ...</label>';
var message_confirmation    = '<label class="form_label">Task Saved!</label>';

// Create inputs tooltips
function input_alert($id)
{
    $($id).addClass('error');
    $($id).val('');
    $($id).attr('placeholder','Invalid');
}

// Send data to server
function do_ajax(data = [], beforeSend = null, success = null)
{
    if( typeof data !== 'undefined' && !($.isEmptyObject(data)) )
    {
        $.ajax({
            url: ajax_url,
            type: "POST",
            dataType: "json",
            async: "true", 
            data: data,
            beforeSend: beforeSend(),
            success: (res) => {
                success(res)
            }
        });//END - AJAX		
    }
    else
    {
        Error('Sent empty data to server from function: "do_ajax"');
    }
}
/**************************************** END Global ****************************************/



$(document).ready(function(){

    // refresh page  when close bootstrap popup
    $('#close_add_new_task, #close_edit_task').on("click", function() {
        location.reload();
    });
    



    //START - Add Task AJAX
    $('#add_new_task').click("on",function(){

        let popup = $('#add_task_wrapper');
        let data = {};

        // Get form data
        let form_data = $('#form_add_new_task').serializeArray();

        // Form data to array
        $(form_data).each((index, obj) => data[obj.name] = obj.value);

        // RegExp Pattern
        // let textReg = /^[a-zA-Z0-9\s ]+$/;
        
        // Reset input fields error class
        $('input[type="text"]').removeClass('error');
        
        // Form validation
        if(data.title.length < 2 )
        {
            input_alert('#title');
        }
        else if (data.type == 0)
        {
            $('#type').addClass('error');
        }
        else if (data.article.length < 5 )
        {
            input_alert('#article');
        }
        else
        {
            // Hide "save" button 
            $(this).hide();

            var beforeSend = function(){
                popup.html(message_sending_details);
            };

            var success = function(res){
                if(res == 1){
                    setTimeout(() => popup.html(message_confirmation) , 2000);
                }else{
                    popup.html(message_problem);
                }
            };

            // Open ajax
            do_ajax(data, beforeSend, success);

        }
    });	//END - Add Task AJAX
 



    //START - Edit Task AJAX
    $('.edit_task').click("on",function(){

        let ids_array = ["id", "title", "type", "status", "article"];
        let data_object = $(this).data('object');
 
        Object.keys(data_object).forEach(function(element, index)
        {
            if(ids_array.includes(element))
            {
                let id = "edit_"+element;
                let el = document.getElementById(id);

                if(el.tagName == "INPUT" && el.type == "text")
                {
                    el.value = data_object["title"];
                }
                else if(el.tagName == "SELECT")
                {
                    $('#'+id+' option[value="'+data_object[element]+'"]').prop('selected',true);
                }
                else if(el.tagName == "TEXTAREA")
                {
                    el.innerHTML = data_object["article"];
                }
                else if(el.tagName == "INPUT" && el.type == "hidden")
                {
                    el.value = data_object["id"];
                }
            }
        });

    });


    // Send data to server
    $('#edit_task').click("on",function(){
         
        let popup = $('#edit_task_wrapper');
        let data = {};

        // Get form data
        let form_data = $('#form_edit_task').serializeArray();

        // Form data to array
        $(form_data).each((index, obj) => data[obj.name] = obj.value);

        // RegExp Pattern
        // let textReg = /^[a-zA-Z0-9\s ]+$/;
        
        // Reset input fields error class
        $('input[type="text"]').removeClass('error');
        
        // Form validation
        if(data.edit_title.length < 2 )
        {
            input_alert('#edit_title');
        }
        else if (data.edit_type == -1)
        {
            $('#edit_type').addClass('error');
        }
        else if (data.edit_status == -1)
        {
            $('#edit_status').addClass('error');
        }
        else if (data.edit_article.length < 5 )
        {
            input_alert('#edit_article');
        }
        else
        {
            // Hide "save" button 
            $(this).hide();

            var beforeSend = function(){
                popup.html(message_sending_details);
            };

            var success = function(res){
                if(res == 1){
                    setTimeout(() => popup.html(message_confirmation) , 2000);
                }else{
                    popup.html(message_problem);
                }
            };

            // Open ajax
            do_ajax(data, beforeSend, success);

        }

    });  
    //END - Edit Task AJAX



});//END - document - ready
