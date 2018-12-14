import React, { Component } from 'react';

class Car extends Component {
    constructor(props) {
        super(props)
        this.state = {
            clicked: false
        }
        this.clickThing2 = this.clickThing2.bind(this)

    }
    render() {
        return (
            <img onMouseUp={this.clickThing} onMouseDown={this.clickThing2} width="500" src="https://assets.bugatti.com/fileadmin/_processed_/sei/p121/se-image-4f750982624e527a8b1003408e4febcf.jpg" alt={this.doThing()}/>
        );
    }

    doThing() {
        console.log(this.state)
        return 'hello'
    }

    clickThing (e) {
       e.target.src ="https://assets.bugatti.com/fileadmin/_processed_/sei/p121/se-image-4f750982624e527a8b1003408e4febcf.jpg"
        // console.log(this.state)
    }

    clickThing2 (e) {
        this.setState({clicked:true})
       e.target.src ="https://assets.bugatti.com/fileadmin/_processed_/sei/p54/se-image-4799f9106491ebb58ca3351f6df5c44a.jpg"
    }


}

export default Car;