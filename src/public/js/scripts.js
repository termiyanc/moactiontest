$(document).ready(
    function () {
        $('input.subscription[type="checkbox"]').change(
            function () {
                $.ajax(
                    {
                        url: 'users/' + (this.checked ? 'add' : 'remove') + 'Subscription/' + this.dataset.user_id + '/' + this.dataset.subscription_id,
                        success: function(){
                            $(this).trigger('checked', !this.checked);
                        }
                    }
                );
            }
        )
    }
);