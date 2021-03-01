<script>

$(document).ready(function() {

 $(".add-basket").click(function () {
        var item = $(this).attr("data-item");
        $.ajax({
            type:"POST",
            url:"basket.php", 
            dataType:"text",
            data:{count:1,item:item},
        })
        .done(function(response) {  
            if(response=="true"){
                alert("sepete eklendi.");
            }
        });
    });  
}); 

</script>



<div class="add-basket" data-item="'.$print["id"].'">SEPEKETE EKLE</div>
