import React from 'react'
import "../FooterDefault/FooterDefault.css"
import whastapp from "../../Img/whastapp.png"
import instagram from "../../Img/instagram.png"
// import "../FontawsomeIcons/Font"
// import { FontAwesomeIcon } from '@fortawesome/react-fontawesome'

export const FooterDefault = () => {
  return (
    <div className="main-footer">
      <div className="container">
        <div className="row">
          {/* Column1 */}
          <div className="col">
            <h3>ABOUT US</h3>
            <ul className="list-unstyled">
              <li className='paragraf1'>
                Wrap your Shoes merupakan sebuah usaha yang bergerak di bidang jasa
                yang menyediakan jasa laundry/cuci sepatu yang berasal dari Kota Depok.
              </li>
              <br/>
              <li className='paragraf1'>
                Ada berbagaimacam service atau layanan yang kami sediakan mulai dari Cuci
                hingga repaint ulang sepatu anda.
              </li>
            </ul>
          </div>
          {/* Column2 */}
          <div className="col">
            <h3>CONTACT US</h3>
            <ul className="list-unstyled">
              <li>
                Business Hour:
                <p>Monday-Saturday: 08:00-18-00</p>
              </li>
              <li>
                Workshop Depok
              </li>
              <li>Jl. Masjid Baiturrahman No. 7 Kalimulya, Depok</li>
              <br/>
              <li>Phone: 087873759172</li>
            </ul>
          </div>
          {/* <div className="col">
            <h4>Stuff</h4>
            <ui className="list-unstyled">
              <li>DANK MEMES</li>
              <li>OTHER STUFF</li>
              <li>GUD STUFF</li>
            </ui>
          </div> */}
          {/* Column3 */}
          <div className="col">
            <h4>Our Social Media</h4>
            <ul className="social list-unstyled">
                <img
                    className='logo-whatsapp'
                    src={whastapp}
                    width="25"
                    height="25"
                    alt="logo"
                />
                <img
                    className='logo-instagram'
                    src={instagram}
                    width="25"
                    height="25"
                    alt="logo"
                />
              {/* <li className="icon1"><a href='#'><FontAwesomeIcon icon="fa-brands fa-whatsapp" size="xl" /></a></li>
              <li className="icon2"><a href='#'><FontAwesomeIcon icon="fa-brands fa-instagram" size="xl"/></a></li> */}
            </ul>
          </div>
        </div>
        <hr />
        <div className="copyright row">
          <p className="col-sm">
            &copy;{new Date().getFullYear()} - WRAP | All rights reserved |
            Terms Of Service | Privacy
          </p>
        </div>
      </div>
    </div>
  )
}
