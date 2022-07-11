import React from "react";
import { Button, Card } from "react-bootstrap";
import "./CardDefault.css";
import sepatu1 from "../../Img/service1.jpeg";
import sepatu2 from "../../Img/service2.jpeg";
import sepatu3 from "../../Img/service3.jpeg";
import sepatu4 from "../../Img/service4.jpeg";

export const CardDefault = () => {
    return (
        <div className="container-allCard">
            <div>
                <h2 className="judulService">Service</h2>
                <hr className="box2" />
                <p className="textService">
                    Wrap your Shoes sudah mencuci lebih dari 643 pasang sepatu
                    dan akan terus bertambah. Untuk service atau layanan anda
                    bisa melihat dibawah ini
                </p>
            </div>
            <div className="allCard">
                <div className="card1">
                    <Card style={{ width: "18rem" }}>
                        <Card.Img variant="top" src={sepatu1} />
                        <Card.Body>
                            <Card.Title>Reguler Rp.35.000</Card.Title>
                            <Card.Text>
                                reguler adalah jasa cuci sepatu sencara
                                menyeluruh agar sepatuh terlihat bersih kembali.
                            </Card.Text>
                        </Card.Body>
                    </Card>
                </div>
                <div className="card2">
                    <Card style={{ width: "18rem" }}>
                        <Card.Img variant="top" src={sepatu2} />
                        <Card.Body style={{ width: "18rem" }}>
                            <Card.Title>Deep Clean Rp.50.000</Card.Title>
                            <Card.Text>
                                Deep cleaning adalah jasa mcuci sepatu secara
                                menyeluruh, mulai dari bagian luar hingga dalam.
                                Dan juga jika terdapat yellowing atau noda
                                lainnya dapat di bersihkan.
                            </Card.Text>
                        </Card.Body>
                    </Card>
                </div>
                <div className="card3">
                    <Card style={{ width: "18rem" }}>
                        <Card.Img variant="top" src={sepatu4} />
                        <Card.Body>
                            <Card.Title>One day service Rp.60.000</Card.Title>
                            <Card.Text>
                                One day service adalah jasa cuci sepatu yang
                                bisa diselesaikan pada hari itu juga.
                            </Card.Text>
                        </Card.Body>
                    </Card>
                </div>
            </div>
        </div>
    );
};

// export default CardDefault;
