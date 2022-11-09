const turbolinks = require('turbolinks');

document.addEventListener("livewire:load", function(event) {
    turbolinks.start();
});
