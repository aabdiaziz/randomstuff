class Customer {

    name:string;
    age:number;
    email:any;

    printDetails(){
        console.log(this.name)
        console.log(this.age)
        console.log(this.email)
    }


}

let Abdi = new Customer()

Abdi.name = 'Abdiaziz'

Abdi.age = 25

Abdi.email = 'abdi@email.com'

Abdi.printDetails()
