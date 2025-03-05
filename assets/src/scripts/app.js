try {
    window.jQuery = window.$ = require('jquery');
   require("./vendors");
   //require("./modules/input_mask");
    require("./modules/animate_bot");
   require("./modules/menu");
   require("./modules/generall");



}
catch (e) {
    console.log('JS ERROR!!!', e);
}