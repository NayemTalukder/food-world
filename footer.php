<div id="footer" class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 wow slideInDown">
                    <h4>contact us</h4>
                    <p><i class="fa fa-home" aria-hidden="true"></i> Mohakhali,Dhaka</p>
                    <p><i class="fa fa-envelope" aria-hidden="true"></i> info@foodworld.com</p>
                    <p><i class="fa fa-phone-square" aria-hidden="true"></i> +08 15616</p>
                    <p><i class="fa fa-globe" aria-hidden="true"></i> www.foodworld.com</p>
                </div>
                <div class="col-lg-4 col-md-4 wow slideInDown">
                <h4>About us</h4>
                    <p><i class="fa fa-square-o" aria-hidden="true"></i> about us</p>
                    <p><i class="fa fa-square-o" aria-hidden="true"></i> privacy</p>
                    <p><i class="fa fa-square-o" aria-hidden="true"></i> term & condition</p>
                </div>
                <div class="col-lg-4 col-md-4 wow slideInDown">
                    <h4>stay in touch</h4>
                    <i class="social fab fa-facebook" aria-hidden="true"></i>
                    <i class="social fab fa-twitter" aria-hidden="true"></i>
                    <i class="social fab fa-pinterest" aria-hidden="true"></i>
                    <i class="social fab fa-youtube" aria-hidden="true"></i>
                    <i class="social fab fa-github" aria-hidden="true"></i>
                    <i class="social fab fa-linkedin" aria-hidden="true"></i><br>
                    <input type="email" placeholder="subscribe for update"><button class="btn btn-success">Subscribe</button>  
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery & Others (necessary for Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <script>
        $("#Login, #foodItem").click(function(){
            if($("#Reservation, #Register").hasClass("bg-success text-white")){
                $("#Reservation, #Register").removeClass("bg-success text-white");
                $("#RegisterForm, #reservations").addClass("hidden");
                $("#Login, #foodItem").addClass("bg-success text-white show");
                $("#LoginForm, #foodItemDisplay").removeClass("hidden");
            }
        });
        $("#Reservation, #Register").click(function(){
            if($("#Login, #foodItem").hasClass("bg-success text-white")){
                $("#Login, #foodItem").removeClass("bg-success text-white");
                $("#LoginForm, #foodItemDisplay").addClass("hidden");
                $("#Reservation, #Register").addClass("bg-success text-white");
                $("#RegisterForm, #reservations").removeClass("hidden");
            }
        });
        $("#Signin-up, #cart").click(function(){
            console.log("I am Clicked");
            if($("#Reservation, #Register").hasClass("bg-success text-white")){
                $("#Reservation, #Register").removeClass("bg-success text-white");
                $("#RegisterForm, #reservations").addClass("hidden");
                $("#Login, #foodItem").addClass("bg-success text-white show");
                $("#LoginForm, #foodItemDisplay").removeClass("hidden");
            }
        });
        $('td button').click(function(){
            if($(this).attr('check') == "notreserve"){
                var name = $(this).attr('rename');
                var branch = $(this).attr('rebranch');
                var availabity = $(this).attr('reavailabity');

                var trNode = document.createElement("TR"),
                tdNode1 = document.createElement("TD"),
                newText1 = document.createTextNode(name);
                tdNode1.appendChild(newText1);
                trNode.appendChild(tdNode1);

                var tdNode2 = document.createElement("TD"),
                newText2 = document.createTextNode(branch);
                tdNode2.appendChild(newText2);
                trNode.appendChild(tdNode2);

                var tdNode3 = document.createElement("TD"),
                newText3 = document.createTextNode(availabity);
                tdNode3.appendChild(newText3);
                trNode.appendChild(tdNode3);
                var tbody = document.getElementById("tboddy");
                tbody.appendChild(trNode);
                $(this).attr('check', 'reserved');
            }else if($(this).attr('check') == "notClicked"){
                var name = $(this).attr('foname');
                var price = $(this).attr('foprice');
                var check = $(this).attr('check');

                var trNode = document.createElement("TR"),
                tdNode1 = document.createElement("TD"),
                newText1 = document.createTextNode(name);
                tdNode1.appendChild(newText1);
                trNode.appendChild(tdNode1);

                var tdNode2 = document.createElement("TD");
                var newText2 = document.createTextNode("1");
                tdNode2.appendChild(newText2);
                tdNode2.setAttribute('id', name);
                trNode.appendChild(tdNode2);

                var tdNode3 = document.createElement("TD"),
                newText3 = document.createTextNode(price);
                tdNode3.appendChild(newText3);
                trNode.appendChild(tdNode3);

                var tbody = document.getElementById("tbody");
                tbody.appendChild(trNode);
                $(this).attr('check', 'clicked');

                var oldPrice = $('#TotalPrice').attr('total');
                var newPrice = parseInt(price) + parseInt(oldPrice);
                $('#TotalPrice').html(newPrice);
                $('#TotalPrice').attr('total', newPrice);
            }else if($(this).attr('check') == "clicked"){
                var name = $(this).attr('foname');
                var price = $(this).attr('foprice');
                var quantity = $(this).attr('foquantity');
                var quantityColumn = document.getElementById(name);
                var newQuantity = parseInt(quantity) + 1;
                var tdNode = document.createElement("TD");
                tdNode.setAttribute('id', name);
                var newText = document.createTextNode(newQuantity);
                tdNode.appendChild(newText);
                quantityColumn.replaceWith(tdNode);
                $(this).attr('foquantity', newQuantity);

                var oldPrice = $('#TotalPrice').attr('total');
                var newPrice = parseInt(price) + parseInt(oldPrice);
                $('#TotalPrice').html(newPrice);
                $('#TotalPrice').attr('total', newPrice);
            }else if($(this).attr('check') == "rating"){
                var resName = $(this).attr('restname');
                $('#resRating').val(resName);
            }
        });
        //Sorting
        $('.Location').click(function(){ 
        var branchValue = $(this).text();
            $( ".branchValue" ).html( '"' + branchValue + '"');
            $('tbody tr').removeClass("beforeHidden afterHidden");
            $('.' + branchValue).addClass("afterHidden");
            $('tbody tr').addClass("beforeHidden");
        });
    </script>
  </body>
</html>