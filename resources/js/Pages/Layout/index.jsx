import React from "react";
import Footer from "../Compoment/footer";
import Navbar from "../Compoment/navbar";
import '../../bootstrap';

const Layout = ({ children }) => {
    return (
        <>
            <Navbar/>
            {children}
            <Footer />
        </>
    );
};

export default Layout;
