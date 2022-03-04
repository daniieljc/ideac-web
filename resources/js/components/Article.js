import React, {Component} from 'react';
import ReactDOM from 'react-dom';
import axios from "axios";

const baseUrl = "http://localhost/";

export default class Article extends Component {
    constructor(props) {
        super(props);
        this.state = {
            article: []
        }
    }

    componentDidMount() {
        axios.get(baseUrl + 'api/articles').then(response => {
            this.setState({article: response.data})
        }).catch(error => {
            alert("Error " + error)
        })
    }

    render() {
        return (
            this.renderList()
        );
    }

    renderList() {
        return this.state.article.map((data) => {
            return (
                <div className="bg-white px-4 py-5 border-b border-gray-200 sm:px-6 rounded-lg mb-4">
                    <div className="-ml-4 -mt-2 flex items-center justify-between flex-wrap sm:flex-nowrap">
                        <div className="ml-4 mt-2">
                            <h3 className="text-lg leading-6 font-medium text-gray-900">
                                {data.description} - {data.price}
                            </h3>
                        </div>
                        <div className="ml-4 mt-2 flex-shrink-0">
                            <div
                                className="relative inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                {data.code}
                            </div>
                        </div>
                    </div>
                </div>
            )
        })
    }
}

if (document.getElementById('article')) {
    ReactDOM.render(<Article/>, document.getElementById('article'));
}
