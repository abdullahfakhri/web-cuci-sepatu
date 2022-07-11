import React from "react";
import "../HomePage/HomePage.css";
import { FooterDefault } from "../components/FooterDefault/FooterDefault";
import { HomeSlider } from "../components/HomeSlider/HomeSlider";
import { NavbarDefault } from "../components/NavbarDefault/NavbarDefault";
import { CardDefault } from "../components/CardDefault/CardDefault";

export const HomePage = () => {
    return (
        <div className="mylayout">
            {/* navbar */}
            <div className="navbar1">
                <NavbarDefault />
            </div>
            {/* carousel */}
            <div className="mycarousel">
                <HomeSlider />
            </div>
            {/* about */}
            <div
                className="layoutAbout col-lg-5 text-center"
                data-scrollreveal="enter right over 1s"
                data-sr-init="true"
                data-sr-complete="true"
            >
                <h2>About WRAP</h2>
                <hr className="primary" />
                <p>
                    Wrap your Shoes merupakan usaha yang bergerak dibidang jasa
                    pencucian sepatu. Wrap your Shoes didirikan pada 16 Maret
                    2021 dimana usaha ini didirikan untuk membantu menyelesaikan
                    permasalahan di lingkungan sekitar mengenai sepatu kotor.
                    Wrap your Shoes juga memiliki visi untuk meningkatkan
                    kualitas dan juga terus membagikan tips dalam merawat
                    sepatu.
                </p>
                <p>
                    Sepatu adalah bagian paling penting dan signifikan dalam
                    pemakaian kita sehari-hari. Sementara sepatu sangat penting
                    untuk kenyamanan kaki, sepatu juga dapat menjadi kendaraan
                    untuk membawa kuman (jika tidak dirawat dengan baik).
                    Keringat, debu, kotoran… Sepatu melewati banyak area yang
                    tidak higienis dan jika tidak dibersihkan secara teratur
                    dapat menjadi rumah yang sempurna bagi kuman, yang
                    menyebabkan infeksi serius dan penyakit lainnya.
                </p>
                <p>
                    Oleh karena itu Wrap your Shoes mempunyai tekat agar terus
                    memberikan layanan terbaik kepada sepatu-sepatu konsumen.
                </p>
            </div>
            {/* service */}
            <div className="service">
                <div className="cardDefault">
                    <CardDefault />
                </div>
            </div>
            {/* layanan */}
            <div></div>
            <div className="footer">
                <FooterDefault />
            </div>
        </div>
    );
};
