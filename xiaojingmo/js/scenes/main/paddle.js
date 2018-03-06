    var Paddle = function() {
        var image = imageByName("blank");
        var o = {
            image: image,
            x: 100,
            y: 250,
            speed: 5,
            move: function(x) {
                //判断边界
                if (x < 0) {
                    x = 0;
                }
                if (x > 400 - this.image.width) {
                    x = 400 - this.image.width;
                }
                this.x = x;
            },
            moveLeft: function() {
                this.move(this.x - this.speed);
            },
            moveRight: function() {
                this.move(this.x + this.speed);
            },
            collide: function(ball) {
                if (ball.y + ball.image.height > this.y) {
                    if (ball.x > this.x && ball.x < this.x + this.image.width) {

                        return true;
                    }
                }
                return false;
            },
        };

        return o;
    };
