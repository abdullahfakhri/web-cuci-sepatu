import React from 'react'
import "../Trackyourshoes/Trackyourshoes.css"
import logo from "../Img/logo.jpeg"
import { FooterDefault } from '../components/FooterDefault/FooterDefault'
// import { Button } from 'react-bootstrap'

export const Trackyourshoes = () => {
  return (
    <div>
        {/* header */}
        <div>
            <div>
                <img src={logo}
                    width="70"
                    height="60"
                    className="logoTrack d-inline-block align-top"
                >
                </img>
            </div> 
        </div>
        {/* status */}
        <div>
            <div>
                <h1 className='h1-track'>Track your shoes</h1>
                <p className='p-track'> Yuk! cek status pengerjaan sepatu kamu!</p>
            </div>
            <div className='status-formulir'>
                <label className='form-label' form='messegae'></label>
                <input className='form-input' type="text" name="number_transsaction" id='email' placeholder='Nomor transaksi anda'></input>
            </div>
            <div className='status-formulir'>
                <div id='button-con'>
                    <button className='button-track' href="#" type="submit">CEK</button>
                </div>
            </div>
        </div>
        {/* footer */}
        <div className='footerTrack'>
            <FooterDefault/>
        </div>
    </div>
  )
}
