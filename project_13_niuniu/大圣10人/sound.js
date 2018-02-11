var sound = {
    audioContext: null,
    audioBuffers: [],
    isloaded: false,
    isBgm: false,
    o: {},
    source: [],
    initModule: function() {
        this.audioBuffers = [];
        window.AudioContext = window.AudioContext || window.webkitAudioContext || window.mozAudioContext || window.msAudioContext;
        this.audioContext = new window.AudioContext();
    },
    stopSound: function(name) {
        var buffer = this.audioBuffers[name];
        if (buffer) {
            if (buffer.source) {
                buffer.source.stop(0);
                buffer.source = null;
            }
        }
    },
    playSound: function(name, isLoop) {
        var buffer = this.audioBuffers[name];
        if (buffer) {
            WeixinJSBridge.invoke('getNetworkType', {}, function(e) {
                buffer.source = null;
                buffer.source = sound.audioContext.createBufferSource();
                buffer.source.buffer = buffer.buffer;
                buffer.source.loop = false;
                var gainNode = sound.audioContext.createGain();
                if (isLoop == true) {
                    buffer.source.loop = true;
                    gainNode.gain.value = 0.7;
                } else { gainNode.gain.value = 1.0; }
                buffer.source.connect(gainNode);
                gainNode.connect(sound.audioContext.destination);
                buffer.source.start(0);
            });
        }
    },
    initSound: function(arrayBuffer, name) {
        this.audioContext.decodeAudioData(arrayBuffer, function(buffer) {
            sound.audioBuffers[name] = { "name": name, "buffer": buffer, "source": null };
            if (name == "bgm") {
                sound.isloaded = true;
                sound.playSound(name, true);
            }
        }, function(e) { console.warn('Error decoding file',name,arrayBuffer); });
    },
    loadAudioFile: function(url, name) {
        var xhr = new XMLHttpRequest();
        xhr.open('GET', url, true);
        xhr.responseType = 'arraybuffer';
        xhr.onload = function(e) { sound.initSound(xhr.response, name); };
        xhr.send();
    },
    load: function() { if (this.isloaded) return; for (var i in this.source) { this.loadAudioFile(this.source[i], i); } },
    play: function(num, sex) {

        if (!storage.get('pausemusic')) {
            if (sex) {
                var name = 'sound_';
                if (sex == 1)
                    name += '1';
                else
                    name += '2';
                if (/^\d+$/.test(num))
                    name += '_' + num;
                else
                    name += num;
                this.playSound(name);
            } else { if (num) this.playSound(num); }
        }
    }
};
sound.initModule();
sound.source.bgm = "/static/music/bgm.mp3";
sound.source.gold = "/static/music/gold.mp3";
sound.source.sound_1_0 = "/static/music/sound_1_0.mp3";
sound.source.sound_1_1 = "/static/music/sound_1_1.mp3";
sound.source.sound_1_10 = "/static/music/sound_1_10.mp3";
sound.source.sound_1_11 = "/static/music/sound_1_11.mp3";
sound.source.sound_1_12 = "/static/music/sound_1_12.mp3";
sound.source.sound_1_2 = "/static/music/sound_1_2.mp3";
sound.source.sound_1_3 = "/static/music/sound_1_3.mp3";
sound.source.sound_1_4 = "/static/music/sound_1_4.mp3";
sound.source.sound_1_5 = "/static/music/sound_1_5.mp3";
sound.source.sound_1_6 = "/static/music/sound_1_6.mp3";
sound.source.sound_1_7 = "/static/music/sound_1_7.mp3";
sound.source.sound_1_8 = "/static/music/sound_1_8.mp3";                                         
sound.source.sound_1_9 = "/static/music/sound_1_9.mp3";
sound.source.sound_2_0 = "/static/music/sound_2_0.mp3";
sound.source.sound_2_1 = "/static/music/sound_2_1.mp3";
sound.source.sound_2_10 = "/static/music/sound_2_10.mp3";
sound.source.sound_2_11 = "/static/music/sound_2_11.mp3";
sound.source.sound_2_12 = "/static/music/sound_2_12.mp3";
sound.source.sound_2_2 = "/static/music/sound_2_2.mp3";
sound.source.sound_2_3 = "/static/music/sound_2_3.mp3";
sound.source.sound_2_4 = "/static/music/sound_2_4.mp3";
sound.source.sound_2_5 = "/static/music/sound_2_5.mp3";
sound.source.sound_2_6 = "/static/music/sound_2_6.mp3";
sound.source.sound_2_7 = "/static/music/sound_2_7.mp3";
sound.source.sound_2_8 = "/static/music/sound_2_8.mp3";
sound.source.sound_2_9 = "/static/music/sound_2_9.mp3";
sound.source.bgm = "/static/music/bgm.mp3";
sound.source.sound_101 = "/static/music/sound_101.mp3";
sound.source.sound_1_60 = "/static/music/sound_1_60.mp3";
sound.source.sound_1_61 = "/static/music/sound_1_61.mp3";
sound.source.sound_1_62 = "/static/music/sound_1_62.mp3";
sound.source.sound_1_63 = "/static/music/sound_1_63.mp3";
sound.source.sound_1_64 = "/static/music/sound_1_64.mp3";
sound.source.sound_1_65 = "/static/music/sound_1_65.mp3";
sound.source.sound_1_66 = "/static/music/sound_1_66.mp3";
sound.source.sound_1_67 = "/static/music/sound_1_67.mp3";
sound.source.sound_1_68 = "/static/music/sound_1_68.mp3";
sound.source.sound_1_69 = "/static/music/sound_1_69.mp3";
sound.source.sound_1_70 = "/static/music/sound_1_70.mp3";
sound.source.sound_1_71 = "/static/music/sound_1_71.mp3";
sound.source.sound_1_72 = "/static/music/sound_1_72.mp3";
sound.source.sound_1_73 = "/static/music/sound_1_73.mp3";
sound.source.sound_1_98 = "/static/music/sound_1_98.mp3";
sound.source.sound_1_99 = "/static/music/sound_1_99.mp3";
sound.source.sound_1x1 = "/static/music/sound_1x1.mp3";
sound.source.sound_1x10 = "/static/music/sound_1x10.mp3";
sound.source.sound_1x2 = "/static/music/sound_1x2.mp3";
sound.source.sound_1x3 = "/static/music/sound_1x3.mp3";
sound.source.sound_1x4 = "/static/music/sound_1x4.mp3";
sound.source.sound_1x5 = "/static/music/sound_1x5.mp3";
sound.source.sound_1x8 = "/static/music/sound_1x8.mp3";
sound.source.sound_2_60 = "/static/music/sound_2_60.mp3";
sound.source.sound_2_61 = "/static/music/sound_2_61.mp3";
sound.source.sound_2_62 = "/static/music/sound_2_62.mp3";
sound.source.sound_2_63 = "/static/music/sound_2_63.mp3";
sound.source.sound_2_64 = "/static/music/sound_2_64.mp3";
sound.source.sound_2_65 = "/static/music/sound_2_65.mp3";
sound.source.sound_2_66 = "/static/music/sound_2_66.mp3";
sound.source.sound_2_67 = "/static/music/sound_2_67.mp3";
sound.source.sound_2_68 = "/static/music/sound_2_68.mp3";
sound.source.sound_2_69 = "/static/music/sound_2_69.mp3";
sound.source.sound_2_70 = "/static/music/sound_2_70.mp3";
sound.source.sound_2_71 = "/static/music/sound_2_71.mp3";
sound.source.sound_2_72 = "/static/music/sound_2_72.mp3";
sound.source.sound_2_73 = "/static/music/sound_2_73.mp3";
sound.source.sound_2_98 = "/static/music/sound_2_98.mp3";
sound.source.sound_2_99 = "/static/music/sound_2_99.mp3";
sound.source.sound_2x1 = "/static/music/sound_2x1.mp3";
sound.source.sound_2x10 = "/static/music/sound_2x10.mp3";
sound.source.sound_2x2 = "/static/music/sound_2x2.mp3";
sound.source.sound_2x3 = "/static/music/sound_2x3.mp3";
sound.source.sound_2x4 = "/static/music/sound_2x4.mp3";
sound.source.sound_2x5 = "/static/music/sound_2x5.mp3";
sound.source.sound_2x8 = "/static/music/sound_2x8.mp3";