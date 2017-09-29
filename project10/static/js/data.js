function Dell_data(type) {
    var that = this;
    this.desktop = function() {
        return {
            title: "Desktops, All-in-One PC's & Gaming Consoles",
            list: [{
                    name: 'Inspiron Desktop',
                    desc: 'Extensive storage and exceptional power in an innovative new design that saves you space, without sacrificing performance.',
                    img: 'Inspiron%20Desktop.jpg'
                },
                {
                    name: 'New Inspiron Gaming Desktop',
                    desc: 'All-new gaming desktop featuring powerful AMD Ryzen™ processors, graphics ready for VR, LED lighting and a meticulous design for optimal cooling.',
                    img: 'New%20Inspiron%20Gaming%20Desktop.jpg',
                }, {
                    name: 'XPS Tower',
                    desc: 'The XPS Tower is a desktop built to grow with you. The functional design featuring big power and an easy-open chassis for simple expandability.',
                    img: 'XPS%20Tower.jpg',
                }, {
                    name: 'New Inspiron 24 5000 All-in-One',
                    desc: '24-inch all-in-one designed for seamless streaming. Featuring an InfinityEdge, SmartByte and the latest AMD Radeon™ graphics card.',
                    img: 'Dell_Inspiron_27_7000_AIO.jpg',
                }
            ]
        }
    };
    this.laptop = function() {
        return {
            title: "Laptops, Ultrabooks & 2-in-1 PCs",
            list: [{
                    name: 'Inspiron 15 3000',
                    desc: '15-inch laptop for all your basic computing needs, featuring True Life displays and long battery life.',
                    img: 'Inspiron%2015%203000.jpg'
                },
                {
                    name: 'XPS 15 Laptop',
                    desc: 'Our smallest 15.6-inch laptop packs powerhouse performance and a stunning InfinityEdge display — all in our most powerful XPS laptop.',
                    img: 'XPS%2015%20Laptop.jpg',
                }, {
                    name: 'ALIENWARE 15 GAMING LAPTOP',
                    desc: 'The perfect balance of power and portability come together in the Alienware 15 gaming laptop. Engineered with incredible NVIDIA 10-series or AMD Radeon RX™ graphics and overclocked processors to tilt the game in your favor.',
                    img: 'ALIENWARE%2015%20GAMING%20LAPTOP.jpg',
                }
            ]
        }
    };
    this.cDom = function() {
        var _info = that[type](),
            _arr = _info.list,
            _title = '<h2>' + _info.title + '</h2>',
            _li = '',
            _html = '';
        for (var i = 0; i < _arr.length; i++) {
            var _name = _arr[i].name,
                _desc = _arr[i].desc,
                _img = '../img/' + _arr[i].img;
            _li += '<li>\
                      		<div class="desktop_img"><img src="' + _img + '" /></div>\
                            <div class="desktop_info">\
                            	<h3 class="text-dark text-center">' + _name + '</h3>\
                            	<p>' + _desc + '</p>\
                            </div>\
                        </li>';
        };
        _html = _title + '<ul class="desktop_list">' + _li + '</ul>';
        return _html;
    }
};