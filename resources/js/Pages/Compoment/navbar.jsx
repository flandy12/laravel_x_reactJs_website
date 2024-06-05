import React from "react";

function Navbar() {

    const subnav = [
        {
        name: "Home",
        link: '/',
        },
        {
        name: "Shop",
        link: '/shop',
        },
        {
        name : 'About us',
        link : '/about-us'
        },
        {
        name : 'Services',
        link : '/services'
        },
        {
        name : 'Blog',
        link : '/blog'
        },
        {
        name : 'Contact Us',
        link : '/contact'
        }
    ];

    const url = window.location.href;

    return (
        <>
            <nav
                className="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark"
                arial-label="Furni navigation bar"
            >
                <div className="container">
                    <a className="navbar-brand" href="/">
                        Furni<span>.</span>
                    </a>

                    <button
                        className="navbar-toggler"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#navbarsFurni"
                        aria-controls="navbarsFurni"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >
                        <span className="navbar-toggler-icon"></span>
                    </button>

                    <div className="collapse navbar-collapse" id="navbarsFurni">
                        <ul className="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                            {
                                subnav.map((value,key) => (
                                    <li className={`nav-item active${url === value.link ? 'active' : ''}`} key={key}>
                                        <a className="nav-link" href={value.link}>
                                            {value.name}
                                        </a>
                                    </li>
                                ))
                            }
                        </ul>


                        <ul className="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                            <li>
                                <a className="nav-link" href="#">
                                    <img src="/images/user.svg" />
                                </a>
                            </li>
                            <li>
                                <a className="nav-link" href="cart.html">
                                    <img src="/images/cart.svg" />
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </>
    );
}

export default Navbar;
