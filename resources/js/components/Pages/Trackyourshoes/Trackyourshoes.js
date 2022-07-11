import React, { useEffect, useState } from "react";
import "../Trackyourshoes/Trackyourshoes.css";
import logo from "../Img/logo.jpeg";
import { FooterDefault } from "../components/FooterDefault/FooterDefault";
import axios from "axios";
// import { Button } from 'react-bootstrap'

export const Trackyourshoes = () => {
    const [track, setTrack] = useState([]);
    const [search, setSearch] = useState([]);

    const handleChange = (e) => {
        setSearch({
            [e.target.name]: e.target.value,
        });
    };

    const getSearch = async (e) => {
        e.preventDefault();

        const params = {
            id: search.id,
        };

        await axios
            .get("/api/track-your-shoes", { params })
            .then((response) => {
                setTrack(response.data);
            })
            .catch((error) => {
                console.log(error);
            });
    };

    const Track = (track) => {
        return (
            <div>
                <p className="text-center text-black fs-4">{track.track}</p>
            </div>
        );
    };

    console.log(track.status);

    return (
        <div>
            {/* header */}
            <div>
                <div>
                    <img
                        src={logo}
                        width="70"
                        height="60"
                        className="logoTrack d-inline-block align-top"
                    ></img>
                </div>
            </div>
            {/* status */}
            <div>
                <div>
                    <h1 className="h1-track">Track your shoes</h1>
                    <p className="p-track">
                        {" "}
                        Yuk! cek status pengerjaan sepatu kamu!
                    </p>
                    {track && <Track track={track.status} />}
                    
                </div>
                <form onSubmit={getSearch}>
                    <div className="status-formulir">
                        <label className="form-label"></label>
                        <input
                            className="form-input"
                            type="text"
                            name="id"
                            id="transaction"
                            placeholder="Nomor transaksi anda"
                            onChange={handleChange}
                        ></input>
                    </div>
                    <div className="status-formulir">
                        <div id="button-con">
                            <button className="button-track" type="submit">
                                CEK
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            {/* footer */}
            <div className="footerTrack">
                <FooterDefault />
            </div>
        </div>
    );
};
