$(document).ready(function () {
    Header.ready();
});

let Header = {
    'ready': function () {
        $(document).on('click', '[data-toggle="collapse"]',         function() {Header.togglePanel($(this))});
    },
    'togglePanel': function ($this) {
        let name = $this.data('target');
        let mouse_control = $this.data('mouse');
        let target = $("#"+name);

        if ($this.hasClass('active')) {
            $this.removeClass('active');
            target.slideUp(200);
        } else {
            $this.addClass('active');
            target.slideDown(200);

            if (mouse_control === true) {
                $(document).mouseup(function (e){
                    if ((!target.is(e.target) && !$this.is(e.target))
                        && (target.has(e.target).length === 0 && $this.has(e.target).length === 0)) {
                        $this.removeClass('active');
                        target.slideUp(200);
                    }
                });
            }
        }
    },
};