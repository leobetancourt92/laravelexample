/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function ()
{
    $("form[name=createPost]").on("submit", function (e)
    {
        e.preventDefault();
        e.stopPropagation();
        $.ajax({
            url: BASEURL + "post",
            method: $(this).attr("method"),
            data: $(this).serialize(),
            dataType: 'json',
            success: function (res)
            {
                if (res.message)
                {
                    clearMessages();

                    var html = "<div class='alert alert-success'>";

                    html += "<p>" + res.message + "</p>";

                    html += "</div>";

                    $(".successMessages").html(html);

                    $("form[name=createPost]")[0].reset();
                }
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                if (jqXHR)
                {
                    clearMessages();

                    var errors = jqXHR.responseJSON;

                    var html = "<div class='alert alert-danger'>";

                    for (error in errors)
                    {
                        html += "<p>" + errors[error] + "</p>";
                    }

                    html += "</div>";

                    $(".errorMessages").html(html);
                }
            }
        })
    })
});

function clearMessages()
{
    $(".errorMessages").html('');
    $(".successMessages").html('');
}