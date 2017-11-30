 window.onload = function() {
     $("#myModal").modal("show");
 };
 var cart = [];
 $("#btn_save").on("click", function(e) {
     var name = $("#input_name").val();
     var time = new Date();
     var hour = time.getHours();
     var msg = "";
     if (hour > 6 && hour < 12) {
         msg = "Good morning  " + name;
     } else if (hour >= 12 && hour < 16) {
         msg = "Good afternoon  " + name;
     } else {
         msg = "Good evening  " + name;
     }
     $("#log").html(msg)
 });

 $(".btn-buy").on("click", function(e) {
     var name = $(this).closest('.caption').find("h3").html();
     var price = $(this).find('.badge').html();
     $("#buy").modal("show");
     $("#buyName").html(name);
     $("#buyPrice").html(price);
     $("#buyTotal").html("0$ ");
 });

 $("#input_buy").on("change", function(e) {
     var num = $(this).val();
     var price = $("#buyPrice").html().replace("$", "");
     $("#buyTotal").html(num * price + "$ ");
 });

 $('#buy').on('hidden.bs.modal', function(e) {
     $("#buyName").html(" ");
     $("#input_buy").val(0)
     $("#buyPrice").html(" ");
     $("#buyTotal").html("0$ ");
 });
 $("#buy_save").on("click", function(e) {
     var name = $("#buyName").html();
     var num = $("#input_buy").val();
     var price = $("#buyPrice").html().replace("$", "");
     var cost = $("#buyTotal").html().replace("$", "");
     var opt = { name: name, num: num, price: price, cost: cost };
     if (num>0) {
         cart.push(opt);
         dom_table();
     }
     $('#buy').modal("hide");
 });

 function dom_table() {
     var html = '',
         tcost = 0;
     for (var i = 0; i < cart.length; i++) {
         var d = cart[i],
             name = d.name,
             price = d.price,
             num = d.num,
             cost = d.cost;
         tcost += num * price;
         html += ' <tr >\
                          <td>' + name + '</td>\
                          <td>' + price + '$</td>\
                          <td>' + num + '</td>\
                          <td>' + cost + '$</td>\
                      </tr>';
     };
     $("#table").html(html);
     $("#totalCost").html(tcost + "$");
 }