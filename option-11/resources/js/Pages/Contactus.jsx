import React from "react";
import NavBar from "@/Components/NavBar";

const ContactUs = ({ auth }) => {
    return (
        <div>
            <NavBar auth={auth} />
            <>
                <style>
                    {`
                body {
                  background-color: black;
                  margin: 0;
                  padding: 0;
                }
                .bd-placeholder-img {
                  font-size: 1.125rem;
                  text-anchor: middle;
                  -webkit-user-select: none;
                  -moz-user-select: none;
                  -ms-user-select: none;
                  user-select: none;
                }
                @media (min-width: 768px) {
                  .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                  }
                }
                .container {
                  max-width: 960px;
                }
                .site-header {
                  background-color: rgba(0, 0, 0, 0.85);
                  -webkit-backdrop-filter: saturate(180%) blur(20px);
                  backdrop-filter: saturate(180%) blur(20px);
                }
                .site-header a {
                  color: #727272;
                  transition: color 0.15s ease-in-out;
                }
                .site-header a:hover {
                  color: #fff;
                  text-decoration: none;
                }
                .product-device {
                  position: absolute;
                  right: 10%;
                  bottom: -30%;
                  width: 300px;
                  height: 540px;
                  background-color: #333;
                  border-radius: 21px;
                  transform: rotate(30deg);
                }
                .product-device::before {
                  position: absolute;
                  top: 10%;
                  right: 10px;
                  bottom: 10%;
                  left: 10px;
                  content: "";
                  background-color: rgba(255, 255, 255, 0.1);
                  border-radius: 5px;
                }
                .product-device-2 {
                  top: -25%;
                  right: auto;
                  bottom: 0;
                  left: 5%;
                  background-color: #e5e5e5;
                }
                .flex-equal > * {
                  flex: 1;
                }
                @media (min-width: 768px) {
                  .flex-md-equal > * {
                    flex: 1;
                  }
                }
              `}
                </style>

                <body>
                    <div className="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
                        <div className="col-md-5 p-lg-5 mx-auto my-5">
                            <h1 className="display-4 font-weight-normal">Contact Us</h1>

                            <div className="mb-3">
                                <label htmlFor="" className="form-label">
                                    Name
                                </label>
                                <input type="Name" className="form-control" name="" id="" placeholder="John Doe" />
                            </div>

                            <div className="mb-3">
                                <br />
                                <label htmlFor="" className="form-label">
                                    Email
                                </label>
                                <input
                                    type="email"
                                    className="form-control"
                                    name=""
                                    id=""
                                    aria-describedby="emailHelpId"
                                    placeholder="example@hotmail.com"
                                />
                            </div>

                            <div className="mb-3">
                                <label htmlFor="" className="form-label">
                                    Description
                                </label>
                                <input type="Name" className="form-control" name="" id="" placeholder="Query..." />
                                <br />
                                <a className="btn" href="#">
                                    <button type="submit" className="btn btn-primary">
                                        Submit
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>

                    <footer className="container py-5">
                        <div className="row">
                            <div className="col-12 col-md">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    fill="none"
                                    stroke="currentColor"
                                    strokeLinecap="round"
                                    strokeLinejoin="round"
                                    strokeWidth="2"
                                    className="d-block mb-2"
                                    role="img"
                                    viewBox="0 0 24 24"
                                >
                                    <title>Product</title>
                                    <circle cx="12" cy="12" r="10" />
                                    <path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94" />
                                </svg>
                                <small className="d-block mb-3 text-muted">&copy; 2023</small>
                            </div>
                            <div className="col-6 col-md">
                                <h5>Features</h5>
                                <ul className="list-unstyled text-small">
                                    <li>
                                        <a className="link-secondary" href="#">
                                            Homepage
                                        </a>
                                    </li>
                                    <li>
                                        <a className="link-secondary" href="#">
                                            Products
                                        </a>
                                    </li>
                                    <li>
                                        <a className="link-secondary" href="#">
                                            Log In
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </footer>
                </body>
            </>
        </div >
    );
};

export default ContactUs;