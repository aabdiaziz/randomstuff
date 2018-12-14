import React, { Component } from 'react';

class Chocolate extends Component {
    constructor(props) {
        super(props)
        this.fetchFromApi()

    }
    render() {
        console.log(this.state)
        return (
            'hi'
        );
    }

    fetchFromApi = () => {
        fetch('https://api.coindesk.com/v1/bpi/currentprice/gbp.json')
            .then((data) => {
                return data.json()
            })
            .then((data) => {
               this.setState({data:data})

            })
    }

}

export default Chocolate;