import React from "react";
import ReactDOM from "react-dom";
import { PageRouter } from "./Routers/PageRouter";

function App() {
    return (
        <div className="container">
            <PageRouter />
        </div>
    );
}

export default App;

if (document.getElementById("app")) {
    ReactDOM.render(<App />, document.getElementById("app"));
}
