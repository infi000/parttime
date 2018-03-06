    var Ball = function() {
        var image = imageByName("ball");
        var o = {
            image: image,
            x: 150,
            y: 210,
            speedX: 5,
            speedY: 5,
            fired: false,//发射
            drag:false,// 鼠标拖拽
            fire: function() {
                this.fired = true;
            },
            move: function() {
                if (this.fired) {
                    if (this.x < 0 || this.x > 400) {
                        this.speedX = -this.speedX;
                    }
                    if (this.y < 0 || this.y > 300) {
                        this.speedY = -this.speedY;
                    }
                    //move
                    this.x += this.speedX;
                    this.y += this.speedY;
                }
            },
            bounce: function() {
                this.speedY = -this.speedY;
            }
        };
        return o;
    };