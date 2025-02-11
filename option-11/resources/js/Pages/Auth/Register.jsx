import { Container, Form, Button, Row, Col } from "react-bootstrap";
import { Link, useForm } from "@inertiajs/react";
import { useEffect } from "react";
import AnimateModal from '@/Components/AnimateModal';
import InputError from "@/Components/InputError";

import NavBar from "@/Components/NavBar";
const Register = ({auth,openModal}) => {
    const { data, setData, post, processing, errors, reset } = useForm({
        firstname: "",
        lastname: "",
        email: "",
        phonenumber: "",
        password: "",
        password_confirmation: "",
    });


    useEffect(() => {
        return () => {
            reset("password", "password_confirmation");
        };
    }, []);

    const submit = (e) => {
        e.preventDefault();
        post(route("register"));
    };

    return (
        <div>
           <AnimateModal auth={auth}>  

            <Container
                className="d-flex align-items-center justify-content-center "
                style={{ minHeight: "75vh" }}
            >
                <Form
                    className="p-5 rounded shadow-sm bg-dark text-light"
                    onSubmit={submit}
                >
                    <h2 className="pt-4 mb-4 text-center h2">Create Account</h2>

                    <Row className="mb-3">
                        <Col md={6} className="pr-md-2">
                            <Form.Group controlId="formBasicFirstName">
                                <Form.Label>First name</Form.Label>
                                <Form.Control
                                    id="firstname"
                                    name="firstname"
                                    value={data.firstname}
                                    className="block w-full mt-1"
                                    autoComplete="firstname"
                                    isFocused={true}
                                    onChange={(e) =>
                                        setData("firstname", e.target.value)
                                    }
                                    required
                                />
                                <InputError
                                    message={errors.firstname}
                                    className="mt-2"
                                />
                            </Form.Group>
                        </Col>

                        <Col md={6} className="pl-md-2">
                            <Form.Group controlId="formBasicLastName">
                                <Form.Label>Last name</Form.Label>
                                <Form.Control
                                    id="lastname"
                                    name="lastname"
                                    value={data.lastname}
                                    className="block w-full mt-1"
                                    autoComplete="lastname"
                                    isFocused={true}
                                    onChange={(e) =>
                                        setData("lastname", e.target.value)
                                    }
                                    required
                                />
                                <InputError
                                    message={errors.lastname}
                                    className="mt-2"
                                />
                            </Form.Group>
                        </Col>
                    </Row>

                    <Row className="mb-3">
                        <Col md={6} className="pr-md-2">
                            <Form.Group controlId="formBasicEmail">
                                <Form.Label>Email address</Form.Label>
                                <Form.Control
                                    id="email"
                                    type="email"
                                    name="email"
                                    value={data.email}
                                    className="block w-full mt-1"
                                    autoComplete="username"
                                    onChange={(e) =>
                                        setData("email", e.target.value)
                                    }
                                    required
                                />
                                <InputError
                                    message={errors.email}
                                    className="mt-2"
                                />
                            </Form.Group>
                        </Col>

                        <Col md={6} className="pl-md-2">
                            <Form.Group controlId="formBasicPhoneNumber">
                                <Form.Label>Phone number </Form.Label>
                                <Form.Control
                                    id="phonenumber"
                                    type="number"
                                    name="phonenumber"
                                    value={data.phonenumber}
                                    className="block w-full mt-1"
                                    autoComplete="phonenumber"
                                    onChange={(e) =>
                                        setData("phonenumber", e.target.value)
                                    }
                                    required
                                />
                                <InputError
                                    message={errors.phonenumber}
                                    className="mt-2"
                                />
                            </Form.Group>
                        </Col>
                    </Row>

                    <Row className="mb-3">
                        <Col md={6} className="pl-md-2">
                            <Form.Group controlId="formBasicPassword">
                                <Form.Label>Password </Form.Label>
                                <Form.Control
                                    id="password"
                                    type="password"
                                    name="password"
                                    value={data.password}
                                    className="block w-full mt-1"
                                    autoComplete="new-password"
                                    onChange={(e) =>
                                        setData("password", e.target.value)
                                    }
                                    required
                                />
                                <InputError
                                    message={errors.password}
                                    className="mt-2"
                                />
                            </Form.Group>
                        </Col>

                        <Col md={6} className="pl-md-2">
                            <Form.Group controlId="formBasicConfirmPassword">
                                <Form.Label>Confirm password</Form.Label>
                                <Form.Control
                                    id="password_confirmation"
                                    type="password"
                                    name="password_confirmation"
                                    value={data.password_confirmation}
                                    className="block w-full mt-1"
                                    autoComplete="new-password"
                                    onChange={(e) =>
                                        setData(
                                            "password_confirmation",
                                            e.target.value
                                        )
                                    }
                                    required
                                />
                                <InputError
                                    message={errors.password_confirmation}
                                    className="mt-2"
                                />
                            </Form.Group>
                        </Col>
                    </Row>

                    <div className="flex items-center justify-end mt-4">
                        <Link
                         href={route("login")}
                           
                            className="text-sm text-gray-600 underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        >
                            Already registered?
                        </Link>
                     
                        <Button
                            variant="primary"
                            type="submit"
                            className="ms-4"
                            disabled={processing}
                        >
                            Register
                        </Button>
                    </div>
                </Form>
            </Container>
            </AnimateModal>
        </div>
    );
};

export default Register;
