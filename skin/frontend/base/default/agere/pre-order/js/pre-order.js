var AgerePreOrder = {
	onlyOnce: {},

	attachEvents: function() {
		this.attachValidation();
	},

	attachValidation: function () {
		if (this.onlyOnce['attachValidation'] == undefined) {
			jQuery('.add-to-cart .btn-cart').bind('fb.afterShow', this.initValidation);
			this.onlyOnce['attachValidation'] = true;
		}
	},

	initValidation: function() {
		return new VarienForm('pre-order-form');
	},

	init: function() {
		this.attachEvents();
		jQuery('.add-to-cart .btn-cart').click(AgereService.activate);
	}
};

jQuery(document).ready(function($) {
	AgerePreOrder.init();
});