import React from "react";
import ReactDOM from "react-dom";
import { BrowserRouter as Router, Route, Routes } from "react-router-dom";
import { CardDefault } from "./Pages/components/CardDefault/CardDefault";
import { FooterDefault } from "./Pages/components/FooterDefault/FooterDefault";
import { HomePage } from "./Pages/HomePage/HomePage";
import { Login } from "./Pages/Login/Login";
import { Trackyourshoes } from "./Pages/Trackyourshoes/Trackyourshoes";

export const App = () => {
    return (
        <Router>
            <Routes>
                {/* coba */}
                <Route path="/coba" element={<CardDefault />} />

                <Route path="/" element={<HomePage />} />
                <Route path="/trackyourshoes" element={<Trackyourshoes />} />
                <Route path="/login" element={<Login />} />
                <Route path="/footer" element={<FooterDefault />} />
            </Routes>
        </Router>
    );
};


export default App;

if (document.getElementById("root")) {
    ReactDOM.render(<App />, document.getElementById("root"));
}
