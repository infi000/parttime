              
    var Block = function(postition) {
        var image = imageByName("block");
        var p=postition;
        var o = {
            image: image,
            x: p[0],
            y: p[1],
            lifes:p[2]||1,
            alive: true,//存活
            kill: function() {
                //碰到一次生命值-1
                this.lifes--;
                if(this.lifes<1){
                    this.alive = false;
                }
            },
            collide: function(ball) {
                //碰撞判断
                return this.alive && (Collide(ball, this) || Collide(this, ball));
            },
        };
        return o;
    };
