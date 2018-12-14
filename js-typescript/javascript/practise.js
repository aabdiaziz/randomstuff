"use strict";
var Customer = /** @class */ (function () {
    function Customer() {
    }
    Customer.prototype.printDetails = function () {
        console.log(this.name);
        console.log(this.age);
        console.log(this.email);
    };
    return Customer;
}());
var Abdi = new Customer();
Abdi.name = 'Abdiaziz';
Abdi.age = 25;
Abdi.email = 'abdi@email.com';
Abdi.printDetails();
