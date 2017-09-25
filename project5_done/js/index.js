function Drop() {
    var ddb = $(".drop-down-box"),
        self = this;
    this.nowDdb = "";
    // ddb.on("mouseenter", function(e) {
    //     console.log("enter")
    //     var ddbh = $(this).find(".drop-down-box-hide");
    //     var that = this;
    //     self.nowDdb = that;

    //     ddbh.attr("type", "show");
    //     setTimeout(function() {
    //         var type = ddbh.attr("type");
    //         console.log(self.nowDdb)
    //         if (ddbh.attr("type")=="show") {

    //             ddbh.slideDown()
    //         }
    //         // self.nowDdb.slideDown();
    //     }, 300)
    // });

    // ddb.on("mouseleave", function(e) {
    //     console.log("leave")
    //     var ddbh = $(this).find(".drop-down-box-hide");
    //     ddbh.attr("type", "hide");
    //     nowDdb = "";
    //     console.log(nowDdb)
    //     ddbh.finish()
    //     ddbh.slideUp()
    // })
    // 
    ddb.on("mouseenter", function(e) {
        console.log("enter")
        var ddbh = $(this).find(".drop-down-box-hide");
        var that = this;
        // self.nowDdb = that;

        ddbh.attr("type", "show");

        ddbh.slideDown().delay(1000000000).fadeOut();
        // ddbh.slideDown().delay(1000);
        // setTimeout(function() {
        //     var type = ddbh.attr("type");
        //     console.log(self.nowDdb)
        //     if (ddbh.attr("type") == "show") {

        //         ddbh.slideDown()
        //     }
        //     // self.nowDdb.slideDown();
        // }, 300)
    });

    ddb.on("mouseleave", function(e) {
        console.log("leave")
        var ddbh = $(this).find(".drop-down-box-hide");
        ddbh.attr("type", "hide");
        // nowDdb = "";
        // console.log(nowDdb)
        ddbh.finish()
        ddbh.slideUp()
    })
}

Drop()