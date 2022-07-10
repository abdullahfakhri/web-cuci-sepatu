import React from 'react'
import "../HomeSlider/HomeSlider.css"
import { Carousel } from "react-bootstrap";
import sepatu from "../../Img/gambar_cuci_sepatu.jpg"
import sepatu2 from "../../Img/gambar_cuci_sepatu2.jpg"
import sepatu3 from "../../Img/gambar_cuci_sepatu3.jpg"

export const HomeSlider = () => {
  return (
    <div className="caraouselHeader">
      <Carousel className="carousel1">
        <Carousel.Item className="carousel2" interval={5000}>
          <img
            className="imgcarousel d-block w-100"
            src={sepatu}
            // width={100} height={500}
            alt="First slide"
          />
          <Carousel.Caption>
            {/* <h3>Jordan 1 SBN</h3>
            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p> */}
          </Carousel.Caption>
        </Carousel.Item>
        <Carousel.Item className="carousel2" interval={5000}>
          <img
            className="imgcarousel d-block w-100"
            src={sepatu2}
            // width={100} height={500}
            alt="Second slide"
          />
          <Carousel.Caption>
            {/* <h3>Second slide label</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> */}
          </Carousel.Caption>
        </Carousel.Item>
        <Carousel.Item className="carousel2" interval={5000}>
          <img
            className="imgcarousel d-block w-100"
            src={sepatu3}
            // width={100} height={500}
            alt="Third slide"
          />
          <Carousel.Caption>
            {/* <h3>AIR MAX 1 TRAVIS SCOTT</h3>
            <p>
              Praesent commodo cursus magna, vel scelerisque nisl consectetur.
            </p> */}
          </Carousel.Caption>
        </Carousel.Item>
      </Carousel>
    </div>
  )
}
