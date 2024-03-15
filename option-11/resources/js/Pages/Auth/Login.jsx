import { motion } from "framer-motion";
import React, { useEffect } from "react";
import { Container, Form, Button } from "react-bootstrap";
import { Head, Link, useForm } from "@inertiajs/react";
import NavBar from "@/Components/NavBar";
import Backdrop from "@/Components/Backdrop";

const Login = ({ handleClose, auth }) => {
    const { data, setData, post, processing, errors, reset } = useForm({
        email: "",
        password: "",
        remember: false,
    });
    //manipulate this to get different animations of pop in
    const dropIn = {
        hidden: {
          y: "-100vh",
            opacity: 0,
        },
        visible: {
            y: "1vh",
            opacity: 1,
            transition: {
                duration: 0.1,
                type: "spring",
                damping: 27,
                stiffness: 400,
            },
        },
        exit: {
            y: "1vh",
            opacity: 0,
        },
    };

    useEffect(() => {
        return () => {
            reset("password");
        };
    }, []);

    const submit = (e) => {
        e.preventDefault();
      
        post(route("login"));
    };

    return (
        <Backdrop
            onClick={handleClose}
            initial={{ opacity: 0 }}
            animate={{ opacity: 1 }}
            exit={{ opacity: 0 }}
        >
            <motion.div
                className="d-flex align-items-center justify-content-center "
                style={{ minHeight: "35vh" }}
                onClick={(e) => e.stopPropagation()}
                variants={dropIn}
                initial="hidden"
                animate="visible"
                exit="exit"
                margin="auto"
            >
             <Container>
             <span class="close"  onClick={handleClose}>&times;</span>
             <Form
                    className="p-5 rounded shadow-sm bg-dark text-light"
                    onSubmit={submit}
                >
                      
                    <Head title="Log in" />

                    <h2 className="pt-4 mb-4 text-center h2">Log in</h2>

                    {status && (
                        <div className="mb-4 text-sm font-medium text-green-600">
                            {status}
                        </div>
                    )}

                    <div>
                        <Form.Label>Email address</Form.Label>
                        <Form.Control
                            type="email"
                            name="email"
                            value={data.email}
                            placeholder="hell"
                            className="block w-full mt-1"
                            autoComplete="username"
                            onChange={(e) => setData("email", e.target.value)}
                        />
                        <Form.Text className="text-danger">
                            {errors.email}
                        </Form.Text>
                    </div>

                    <div className="mt-4">
                        <Form.Label>Password</Form.Label>
                        <Form.Control
                            type="password"
                            name="password"
                            value={data.password}
                            autoComplete="current-password"
                            onChange={(e) =>
                                setData("password", e.target.value)
                            }
                        />
                        <Form.Text className="text-danger">
                            {errors.password}
                        </Form.Text>
                    </div>

                    <div className="block mt-4">
                        <Form.Check
                            type="checkbox"
                            label="Remember me"
                            name="remember"
                            checked={data.remember}
                            onChange={(e) =>
                                setData("remember", e.target.checked)
                            }
                        />
                    </div>

                    <div className="flex items-center justify-end mt-4">
                        <Link
                            href="/register"
                            className="text-center link-info"
                        >
                            Not Registered? Click here to sign-up!
                        </Link>

                        <Button
                            variant="primary"
                            type="submit"
                            className="ms-4"
                            disabled={processing}
                        >
                            Log in
                        </Button>
                    </div>
                </Form>
                
             </Container>
               
            </motion.div>
        </Backdrop>
    );
};

export default Login;
