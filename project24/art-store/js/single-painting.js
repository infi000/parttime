function createHTML_imageBox() {
    var imageid = choosed_painting.image||"";
    var desc = choosed_painting.desc||"";
    var html = '<img src="images/art/works/medium/' + imageid + '.jpg" alt="..." class="ui big image" id="artwork">\
                    <div class="ui fullscreen modal">\
                        <div class="image content">\
                            <img src="images/art/works/square-medium/' + imageid + '.jpg" alt="..." class="image">\
                            <div class="description">\
                                <p>' + desc + '</p>\
                            </div>\
                        </div>\
                    </div>';
    return html;
}

function createHTML_infoBox() {
    var desc = choosed_painting.desc||"";
    var title = choosed_painting.title||"";
    var artist = choosed_painting.artist||"";
    var html = '<h2 class="header">' + title + '</h2>\
                     <h3>' + artist + '</h3>\
                     <div class="meta">\
                         <p>\
                             <i class="orange star icon"></i>\
                             <i class="orange star icon"></i>\
                             <i class="orange star icon"></i>\
                             <i class="orange star icon"></i>\
                             <i class="empty star icon"></i>\
                         </p>\
                         <p>' + desc + '</p>\
                     </div>';
    return html;
}

function createHTML_detailsBox() {
    var artist = choosed_painting.artist||"";
    var year = choosed_painting.year||"";
    var medium = choosed_painting.medium||"";
    var width = choosed_painting.width||"";
    var height = choosed_painting.height||"";
    var html = '<table class="ui definition very basic collapsing celled table">\
                            <tbody>\
                                <tr><td>Artist</td><td><a href="#">' + artist + '</a></td></tr>\
                                <tr><td>Year</td><td>' + year + '</td></tr>\
                                <tr><td>Medium</td><td>' + medium + '</td></tr>\
                                <tr><td>Dimensions</td><td>' + width + 'cm x ' + height + 'cm</td></tr>\
                            </tbody>\
                        </table>';
    return html;
}

function createHTML_museumBox() {
    var museum = choosed_painting.museum||"";
    var assession = choosed_painting.museum_Assession||"";
    var copyright = choosed_painting.museum_copyright||"";
    var link = choosed_painting.museum_link||"";
    var html = '<table class="ui definition very basic collapsing celled table">\
                            <tbody>\
                                <tr><td>Museum</td><td>' + museum + '</td></tr>\
                                <tr><td>Assession #</td><td>' + assession + '</td></tr>\
                                <tr><td>Copyright</td><td>' + copyright + '</td></tr>\
                                <tr><td>URL</td><td><a href="' + link + '">View painting at museum site</a></td></tr>\
                                </tbody>\
               </table>';
    return html;
}

function createHTML_genresBox() {
    var genres = choosed_painting.genres;
    var html = '<ul class="ui list">';
    for (var i = 0; i < genres.length; i++) {
        html += '<li class="item"><a href="#">' + genres[i] + '</a></li>';
    }
    html += '</ul>';
    return html;
}

function createHTML_subjectsBox() {
    var html = '<ul class="ui list">\
                            <li class="item"><a href="#">People</a></li>\
                            <li class="item"><a href="#">Science</a></li>\
                        </ul>';
    return html;
}

function createHTML_webBox() {
    var wikilink = choosed_painting.wikilink||"";
    var googlelink = choosed_painting.googlelink||"";
    var googletext = choosed_painting.googledesc || "";
    var html = '<table class="ui definition very basic collapsing celled table">\
                    <tbody>\
                        <tr><td>Wikipedia Link</td><td><a href="' + wikilink + '">View painting on Wikipedia</a></td></tr>\
                        <tr><td>Google Link</td><td><a href="' + googlelink + '">View painting on Google Art Project</a></td></tr>\
                        <tr><td>Google Text</td><td>' + googletext + '</td></tr>\
                    </tbody>\
                </table>';
    return html;
}

function createHTML_frameBox(opt){
    var html="";
    for(var i=0;i<opt.length;i++){
            var title=opt[i].title;
            var type=opt[i].type?parseInt(opt[i].type):"";
            var selected="";
            if(type==0||type==""){
               selected="selected='selected'"
            }
           html+='<option value="'+type+'" '+selected+'>'+title+'</option>';
    }
    return html;
}

function createHTML_glassBox(){
    var html="";
    for(var i=0;i<glass.length;i++){
        var titl=glass[i].title;
    }
}

function toThousands(num) {
    return (num || 0).toString().replace(/(\d)(?=(?:\d{3})+$)/g, '$1,');
}

$(document).ready(function() {
    if (choosed_painting) {
        $("#image_box").html(createHTML_imageBox());
        $("#info_box").html(createHTML_infoBox());
        $("#details_box").html(createHTML_detailsBox());
        $("#museum_box").html(createHTML_museumBox());
        $("#genres_box").html(createHTML_genresBox());
        $("#subjects_box").html(createHTML_subjectsBox());
        $("#web_box").html(createHTML_webBox());
        $("#frame").html(createHTML_frameBox(frames));
        $("#glass").html(createHTML_frameBox(glass));
        $("#matt").html(createHTML_frameBox(matt));
        $("#desc_box").html(choosed_painting.desc||"..");
        $("#price_box").html("$"+toThousands(parseInt(choosed_painting.msrp)));
        $(".math").on("change",function(){
            console.log($(this).val());
        })
    } else {
        var html='<section class="ui container"><h1 class="ui dividing header">SORRY! NO RESLUT!</h1></section>'
        $("#main_box").html(html);
    }

});