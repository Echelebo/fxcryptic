"use strict";
(self.webpackChunk_N_E = self.webpackChunk_N_E || []).push([
    [9074],
    {
        9074: function (e, s, a) {
            a.r(s);
            var l = a(3827),
                n = a(4090),
                i = a(7907),
                t = a(703),
                c = a(8792),
                m = a(5408),
                r = a(4974),
                d = a(293);
            s.default = () => {
                let e = (0, i.usePathname)(),
                    [s, a] = (0, n.useState)(!1),
                    [u, o] = (0, n.useState)(!1),
                    [h, b] = (0, n.useState)(null),
                    x = (e) => {
                        b(h === e ? null : e);
                    };
                return (
                    (0, n.useEffect)(() => {
                        let e = () => {
                            a(window.scrollY > 400);
                        };
                        return (
                            window.addEventListener("scroll", e),
                            () => {
                                window.removeEventListener("scroll", e);
                            }
                        );
                    }, []),
                    (0, l.jsx)(l.Fragment, {
                        children: (0, l.jsxs)("div", {
                            className: "header-menu style-one bg-white ".concat(
                                s ? "fixed" : ""
                            ),
                            children: [
                                (0, l.jsxs)("div", {
                                    className:
                                        "container flex items-center justify-between h-20",
                                    children: [
                                        (0, l.jsx)(c.default, {
                                            className: "menu-left-block",
                                            href: "/",
                                            children: (0, l.jsx)(t.default, {
                                                src: "/images/Logo.png",
                                                width: 2e3,
                                                height: 1e3,
                                                alt: "logo",
                                                priority: !0,
                                                className:
                                                    "w-[149px] max-sm:w-[132px]",
                                            }),
                                        }),
                                        (0, l.jsx)("div", {
                                            className:
                                                "menu-center-block h-full",
                                            children: (0, l.jsxs)("ul", {
                                                className:
                                                    "menu-nav flex items-center xl:gap-2 h-full",
                                                children: [
                                                    (0, l.jsxs)("li", {
                                                        className:
                                                            "nav-item h-full flex items-center justify-center home ".concat(
                                                                "/" === e ||
                                                                    e.includes(
                                                                        "/homepages/"
                                                                    )
                                                                    ? "active"
                                                                    : ""
                                                            ),
                                                        children: [
                                                            (0, l.jsxs)(
                                                                c.default,
                                                                {
                                                                    className:
                                                                        "nav-link text-title flex items-center gap-1",
                                                                    href: "#!",
                                                                    children: [
                                                                        (0,
                                                                        l.jsx)(
                                                                            "span",
                                                                            {
                                                                                children:
                                                                                    "Home",
                                                                            }
                                                                        ),
                                                                        (0,
                                                                        l.jsx)(
                                                                            "span",
                                                                            {
                                                                                children:
                                                                                    (0,
                                                                                    l.jsx)(
                                                                                        m.p,
                                                                                        {
                                                                                            className:
                                                                                                "text-sm",
                                                                                        }
                                                                                    ),
                                                                            }
                                                                        ),
                                                                    ],
                                                                }
                                                            ),
                                                            (0, l.jsxs)("ul", {
                                                                className:
                                                                    "sub-nav",
                                                                children: [
                                                                    (0, l.jsx)(
                                                                        "li",
                                                                        {
                                                                            className:
                                                                                "sub-nav-item ".concat(
                                                                                    "/" ===
                                                                                        e
                                                                                        ? "active"
                                                                                        : ""
                                                                                ),
                                                                            children:
                                                                                (0,
                                                                                l.jsx)(
                                                                                    c.default,
                                                                                    {
                                                                                        className:
                                                                                            "sub-nav-link font-medium",
                                                                                        href: "/",
                                                                                        children:
                                                                                            "Payment Solution",
                                                                                    }
                                                                                ),
                                                                        }
                                                                    ),
                                                                    (0, l.jsxs)(
                                                                        "li",
                                                                        {
                                                                            className:
                                                                                "sub-nav-item",
                                                                            children:
                                                                                [
                                                                                    " ",
                                                                                    (0,
                                                                                    l.jsx)(
                                                                                        c.default,
                                                                                        {
                                                                                            className:
                                                                                                "sub-nav-link font-medium",
                                                                                            href: "/homepages/home2",
                                                                                            children:
                                                                                                "Financial Planning",
                                                                                        }
                                                                                    ),
                                                                                ],
                                                                        }
                                                                    ),
                                                                    (0, l.jsxs)(
                                                                        "li",
                                                                        {
                                                                            className:
                                                                                "sub-nav-item",
                                                                            children:
                                                                                [
                                                                                    " ",
                                                                                    (0,
                                                                                    l.jsx)(
                                                                                        c.default,
                                                                                        {
                                                                                            className:
                                                                                                "sub-nav-link font-medium",
                                                                                            href: "/homepages/home3",
                                                                                            children:
                                                                                                "Online Banking",
                                                                                        }
                                                                                    ),
                                                                                ],
                                                                        }
                                                                    ),
                                                                    (0, l.jsxs)(
                                                                        "li",
                                                                        {
                                                                            className:
                                                                                "sub-nav-item",
                                                                            children:
                                                                                [
                                                                                    " ",
                                                                                    (0,
                                                                                    l.jsx)(
                                                                                        c.default,
                                                                                        {
                                                                                            className:
                                                                                                "sub-nav-link font-medium",
                                                                                            href: "/homepages/home4",
                                                                                            children:
                                                                                                "Personal Finance",
                                                                                        }
                                                                                    ),
                                                                                ],
                                                                        }
                                                                    ),
                                                                    (0, l.jsxs)(
                                                                        "li",
                                                                        {
                                                                            className:
                                                                                "sub-nav-item ".concat(
                                                                                    "/homepages/home5" ===
                                                                                        e
                                                                                        ? "active"
                                                                                        : ""
                                                                                ),
                                                                            children:
                                                                                [
                                                                                    " ",
                                                                                    (0,
                                                                                    l.jsx)(
                                                                                        c.default,
                                                                                        {
                                                                                            className:
                                                                                                "sub-nav-link font-medium",
                                                                                            href: "/homepages/home5",
                                                                                            children:
                                                                                                "Cryptocurrency Financial",
                                                                                        }
                                                                                    ),
                                                                                ],
                                                                        }
                                                                    ),
                                                                    (0, l.jsxs)(
                                                                        "li",
                                                                        {
                                                                            className:
                                                                                "sub-nav-item",
                                                                            children:
                                                                                [
                                                                                    " ",
                                                                                    (0,
                                                                                    l.jsx)(
                                                                                        c.default,
                                                                                        {
                                                                                            className:
                                                                                                "sub-nav-link font-medium",
                                                                                            href: "/homepages/home6",
                                                                                            children:
                                                                                                "Blockchain",
                                                                                        }
                                                                                    ),
                                                                                ],
                                                                        }
                                                                    ),
                                                                ],
                                                            }),
                                                        ],
                                                    }),
                                                    (0, l.jsxs)("li", {
                                                        className:
                                                            "nav-item h-full flex items-center justify-center ".concat(
                                                                e.includes(
                                                                    "/about/"
                                                                )
                                                                    ? "active"
                                                                    : ""
                                                            ),
                                                        children: [
                                                            (0, l.jsxs)(
                                                                c.default,
                                                                {
                                                                    className:
                                                                        "nav-link text-title flex items-center gap-1",
                                                                    href: "#!",
                                                                    children: [
                                                                        (0,
                                                                        l.jsx)(
                                                                            "span",
                                                                            {
                                                                                children:
                                                                                    "About",
                                                                            }
                                                                        ),
                                                                        (0,
                                                                        l.jsx)(
                                                                            "span",
                                                                            {
                                                                                children:
                                                                                    (0,
                                                                                    l.jsx)(
                                                                                        m.p,
                                                                                        {
                                                                                            className:
                                                                                                "text-sm",
                                                                                        }
                                                                                    ),
                                                                            }
                                                                        ),
                                                                    ],
                                                                }
                                                            ),
                                                            (0, l.jsxs)("ul", {
                                                                className:
                                                                    "sub-nav",
                                                                children: [
                                                                    (0, l.jsxs)(
                                                                        "li",
                                                                        {
                                                                            className:
                                                                                "sub-nav-item ".concat(
                                                                                    "/about/about-one" ===
                                                                                        e
                                                                                        ? "active"
                                                                                        : ""
                                                                                ),
                                                                            children:
                                                                                [
                                                                                    " ",
                                                                                    (0,
                                                                                    l.jsx)(
                                                                                        c.default,
                                                                                        {
                                                                                            className:
                                                                                                "sub-nav-link font-medium",
                                                                                            href: "/about/about-one",
                                                                                            children:
                                                                                                "About Style 1",
                                                                                        }
                                                                                    ),
                                                                                ],
                                                                        }
                                                                    ),
                                                                    (0, l.jsxs)(
                                                                        "li",
                                                                        {
                                                                            className:
                                                                                "sub-nav-item ".concat(
                                                                                    "/about/about-two" ===
                                                                                        e
                                                                                        ? "active"
                                                                                        : ""
                                                                                ),
                                                                            children:
                                                                                [
                                                                                    " ",
                                                                                    (0,
                                                                                    l.jsx)(
                                                                                        c.default,
                                                                                        {
                                                                                            className:
                                                                                                "sub-nav-link font-medium",
                                                                                            href: "/about/about-two",
                                                                                            children:
                                                                                                "About Style 2",
                                                                                        }
                                                                                    ),
                                                                                ],
                                                                        }
                                                                    ),
                                                                ],
                                                            }),
                                                        ],
                                                    }),
                                                    (0, l.jsxs)("li", {
                                                        className:
                                                            "nav-item h-full flex items-center justify-center ".concat(
                                                                e.includes(
                                                                    "/service"
                                                                )
                                                                    ? "active"
                                                                    : ""
                                                            ),
                                                        children: [
                                                            (0, l.jsxs)(
                                                                c.default,
                                                                {
                                                                    className:
                                                                        "nav-link text-title flex items-center gap-1",
                                                                    href: "#!",
                                                                    children: [
                                                                        (0,
                                                                        l.jsx)(
                                                                            "span",
                                                                            {
                                                                                children:
                                                                                    "Services",
                                                                            }
                                                                        ),
                                                                        (0,
                                                                        l.jsx)(
                                                                            "span",
                                                                            {
                                                                                children:
                                                                                    (0,
                                                                                    l.jsx)(
                                                                                        m.p,
                                                                                        {
                                                                                            className:
                                                                                                "text-sm",
                                                                                        }
                                                                                    ),
                                                                            }
                                                                        ),
                                                                    ],
                                                                }
                                                            ),
                                                            (0, l.jsxs)("ul", {
                                                                className:
                                                                    "sub-nav",
                                                                children: [
                                                                    (0, l.jsxs)(
                                                                        "li",
                                                                        {
                                                                            className:
                                                                                "sub-nav-item ".concat(
                                                                                    "/service/service-one" ===
                                                                                        e
                                                                                        ? "active"
                                                                                        : ""
                                                                                ),
                                                                            children:
                                                                                [
                                                                                    " ",
                                                                                    (0,
                                                                                    l.jsx)(
                                                                                        c.default,
                                                                                        {
                                                                                            className:
                                                                                                "sub-nav-link font-medium",
                                                                                            href: "/service/service-one",
                                                                                            children:
                                                                                                "Service Style 1",
                                                                                        }
                                                                                    ),
                                                                                ],
                                                                        }
                                                                    ),
                                                                    (0, l.jsxs)(
                                                                        "li",
                                                                        {
                                                                            className:
                                                                                "sub-nav-item ".concat(
                                                                                    "/service/service-two" ===
                                                                                        e
                                                                                        ? "active"
                                                                                        : ""
                                                                                ),
                                                                            children:
                                                                                [
                                                                                    " ",
                                                                                    (0,
                                                                                    l.jsx)(
                                                                                        c.default,
                                                                                        {
                                                                                            className:
                                                                                                "sub-nav-link font-medium",
                                                                                            href: "/service/service-two",
                                                                                            children:
                                                                                                "Service Style 2",
                                                                                        }
                                                                                    ),
                                                                                ],
                                                                        }
                                                                    ),
                                                                    (0, l.jsxs)(
                                                                        "li",
                                                                        {
                                                                            className:
                                                                                "sub-nav-item ".concat(
                                                                                    e.includes(
                                                                                        "/service/service-detail"
                                                                                    )
                                                                                        ? "active"
                                                                                        : ""
                                                                                ),
                                                                            children:
                                                                                [
                                                                                    " ",
                                                                                    (0,
                                                                                    l.jsx)(
                                                                                        c.default,
                                                                                        {
                                                                                            className:
                                                                                                "sub-nav-link font-medium",
                                                                                            href: "/service/service-detail",
                                                                                            children:
                                                                                                "Services Detail",
                                                                                        }
                                                                                    ),
                                                                                ],
                                                                        }
                                                                    ),
                                                                ],
                                                            }),
                                                        ],
                                                    }),
                                                    (0, l.jsxs)("li", {
                                                        className:
                                                            "nav-item h-full flex items-center justify-center ".concat(
                                                                e.includes(
                                                                    "/case-studies/"
                                                                )
                                                                    ? "active"
                                                                    : ""
                                                            ),
                                                        children: [
                                                            (0, l.jsxs)(
                                                                c.default,
                                                                {
                                                                    className:
                                                                        "nav-link text-title flex items-center gap-1",
                                                                    href: "#!",
                                                                    children: [
                                                                        (0,
                                                                        l.jsx)(
                                                                            "span",
                                                                            {
                                                                                children:
                                                                                    "Case Studies",
                                                                            }
                                                                        ),
                                                                        (0,
                                                                        l.jsx)(
                                                                            "span",
                                                                            {
                                                                                children:
                                                                                    (0,
                                                                                    l.jsx)(
                                                                                        m.p,
                                                                                        {
                                                                                            className:
                                                                                                "text-sm",
                                                                                        }
                                                                                    ),
                                                                            }
                                                                        ),
                                                                    ],
                                                                }
                                                            ),
                                                            (0, l.jsxs)("ul", {
                                                                className:
                                                                    "sub-nav",
                                                                children: [
                                                                    (0, l.jsxs)(
                                                                        "li",
                                                                        {
                                                                            className:
                                                                                "sub-nav-item ".concat(
                                                                                    "/case-studies/case-studies-one" ===
                                                                                        e
                                                                                        ? "active"
                                                                                        : ""
                                                                                ),
                                                                            children:
                                                                                [
                                                                                    " ",
                                                                                    (0,
                                                                                    l.jsx)(
                                                                                        c.default,
                                                                                        {
                                                                                            className:
                                                                                                "sub-nav-link font-medium",
                                                                                            href: "/case-studies/case-studies-one",
                                                                                            children:
                                                                                                "Case Studies 1",
                                                                                        }
                                                                                    ),
                                                                                ],
                                                                        }
                                                                    ),
                                                                    (0, l.jsxs)(
                                                                        "li",
                                                                        {
                                                                            className:
                                                                                "sub-nav-item ".concat(
                                                                                    "/case-studies/case-studies-two" ===
                                                                                        e
                                                                                        ? "active"
                                                                                        : ""
                                                                                ),
                                                                            children:
                                                                                [
                                                                                    " ",
                                                                                    (0,
                                                                                    l.jsx)(
                                                                                        c.default,
                                                                                        {
                                                                                            className:
                                                                                                "sub-nav-link font-medium",
                                                                                            href: "/case-studies/case-studies-two",
                                                                                            children:
                                                                                                "Case Studies 2",
                                                                                        }
                                                                                    ),
                                                                                ],
                                                                        }
                                                                    ),
                                                                    (0, l.jsxs)(
                                                                        "li",
                                                                        {
                                                                            className:
                                                                                "sub-nav-item ".concat(
                                                                                    e.includes(
                                                                                        "/case-studies/detail"
                                                                                    )
                                                                                        ? "active"
                                                                                        : ""
                                                                                ),
                                                                            children:
                                                                                [
                                                                                    " ",
                                                                                    (0,
                                                                                    l.jsx)(
                                                                                        c.default,
                                                                                        {
                                                                                            className:
                                                                                                "sub-nav-link font-medium",
                                                                                            href: "/case-studies/detail",
                                                                                            children:
                                                                                                "Case Studies Detail",
                                                                                        }
                                                                                    ),
                                                                                ],
                                                                        }
                                                                    ),
                                                                ],
                                                            }),
                                                        ],
                                                    }),
                                                    (0, l.jsxs)("li", {
                                                        className:
                                                            "nav-item h-full flex items-center justify-center ".concat(
                                                                e.includes(
                                                                    "/pages/"
                                                                )
                                                                    ? "active"
                                                                    : ""
                                                            ),
                                                        children: [
                                                            (0, l.jsxs)(
                                                                c.default,
                                                                {
                                                                    className:
                                                                        "nav-link text-title flex items-center gap-1",
                                                                    href: "#!",
                                                                    children: [
                                                                        (0,
                                                                        l.jsx)(
                                                                            "span",
                                                                            {
                                                                                children:
                                                                                    "Pages",
                                                                            }
                                                                        ),
                                                                        (0,
                                                                        l.jsx)(
                                                                            "span",
                                                                            {
                                                                                children:
                                                                                    (0,
                                                                                    l.jsx)(
                                                                                        m.p,
                                                                                        {
                                                                                            className:
                                                                                                "text-sm",
                                                                                        }
                                                                                    ),
                                                                            }
                                                                        ),
                                                                    ],
                                                                }
                                                            ),
                                                            (0, l.jsxs)("ul", {
                                                                className:
                                                                    "sub-nav",
                                                                children: [
                                                                    (0, l.jsxs)(
                                                                        "li",
                                                                        {
                                                                            className:
                                                                                "sub-nav-item ".concat(
                                                                                    "/pages/faqs" ===
                                                                                        e
                                                                                        ? "active"
                                                                                        : ""
                                                                                ),
                                                                            children:
                                                                                [
                                                                                    " ",
                                                                                    (0,
                                                                                    l.jsx)(
                                                                                        c.default,
                                                                                        {
                                                                                            className:
                                                                                                "sub-nav-link font-medium",
                                                                                            href: "/pages/faqs",
                                                                                            children:
                                                                                                "FAQs",
                                                                                        }
                                                                                    ),
                                                                                ],
                                                                        }
                                                                    ),
                                                                    (0, l.jsxs)(
                                                                        "li",
                                                                        {
                                                                            className:
                                                                                "sub-nav-item ".concat(
                                                                                    "/pages/pricing" ===
                                                                                        e
                                                                                        ? "active"
                                                                                        : ""
                                                                                ),
                                                                            children:
                                                                                [
                                                                                    " ",
                                                                                    (0,
                                                                                    l.jsx)(
                                                                                        c.default,
                                                                                        {
                                                                                            className:
                                                                                                "sub-nav-link font-medium",
                                                                                            href: "/pages/pricing",
                                                                                            children:
                                                                                                "Pricing",
                                                                                        }
                                                                                    ),
                                                                                ],
                                                                        }
                                                                    ),
                                                                    (0, l.jsxs)(
                                                                        "li",
                                                                        {
                                                                            className:
                                                                                "sub-nav-item ".concat(
                                                                                    "/pages/partners" ===
                                                                                        e
                                                                                        ? "active"
                                                                                        : ""
                                                                                ),
                                                                            children:
                                                                                [
                                                                                    " ",
                                                                                    (0,
                                                                                    l.jsx)(
                                                                                        c.default,
                                                                                        {
                                                                                            className:
                                                                                                "sub-nav-link font-medium",
                                                                                            href: "/pages/partners",
                                                                                            children:
                                                                                                "Partners",
                                                                                        }
                                                                                    ),
                                                                                ],
                                                                        }
                                                                    ),
                                                                ],
                                                            }),
                                                        ],
                                                    }),
                                                    (0, l.jsxs)("li", {
                                                        className:
                                                            "nav-item h-full flex items-center justify-center ".concat(
                                                                e.includes(
                                                                    "/blog/"
                                                                )
                                                                    ? "active"
                                                                    : ""
                                                            ),
                                                        children: [
                                                            (0, l.jsxs)(
                                                                c.default,
                                                                {
                                                                    className:
                                                                        "nav-link text-title flex items-center gap-1",
                                                                    href: "#!",
                                                                    children: [
                                                                        (0,
                                                                        l.jsx)(
                                                                            "span",
                                                                            {
                                                                                children:
                                                                                    "Blog",
                                                                            }
                                                                        ),
                                                                        (0,
                                                                        l.jsx)(
                                                                            "span",
                                                                            {
                                                                                children:
                                                                                    (0,
                                                                                    l.jsx)(
                                                                                        m.p,
                                                                                        {
                                                                                            className:
                                                                                                "text-sm",
                                                                                        }
                                                                                    ),
                                                                            }
                                                                        ),
                                                                    ],
                                                                }
                                                            ),
                                                            (0, l.jsxs)("ul", {
                                                                className:
                                                                    "sub-nav",
                                                                children: [
                                                                    (0, l.jsxs)(
                                                                        "li",
                                                                        {
                                                                            className:
                                                                                "sub-nav-item ".concat(
                                                                                    "/blog/blog-list-one" ===
                                                                                        e
                                                                                        ? "active"
                                                                                        : ""
                                                                                ),
                                                                            children:
                                                                                [
                                                                                    " ",
                                                                                    (0,
                                                                                    l.jsx)(
                                                                                        c.default,
                                                                                        {
                                                                                            className:
                                                                                                "sub-nav-link font-medium",
                                                                                            href: "/blog/blog-list-one",
                                                                                            children:
                                                                                                "Blog List 1",
                                                                                        }
                                                                                    ),
                                                                                ],
                                                                        }
                                                                    ),
                                                                    (0, l.jsxs)(
                                                                        "li",
                                                                        {
                                                                            className:
                                                                                "sub-nav-item ".concat(
                                                                                    "/blog/blog-list-two" ===
                                                                                        e
                                                                                        ? "active"
                                                                                        : ""
                                                                                ),
                                                                            children:
                                                                                [
                                                                                    " ",
                                                                                    (0,
                                                                                    l.jsx)(
                                                                                        c.default,
                                                                                        {
                                                                                            className:
                                                                                                "sub-nav-link font-medium",
                                                                                            href: "/blog/blog-list-two",
                                                                                            children:
                                                                                                "Blog List 2",
                                                                                        }
                                                                                    ),
                                                                                ],
                                                                        }
                                                                    ),
                                                                    (0, l.jsxs)(
                                                                        "li",
                                                                        {
                                                                            className:
                                                                                "sub-nav-item ".concat(
                                                                                    "/blog/blog-grid" ===
                                                                                        e
                                                                                        ? "active"
                                                                                        : ""
                                                                                ),
                                                                            children:
                                                                                [
                                                                                    " ",
                                                                                    (0,
                                                                                    l.jsx)(
                                                                                        c.default,
                                                                                        {
                                                                                            className:
                                                                                                "sub-nav-link font-medium",
                                                                                            href: "/blog/blog-grid",
                                                                                            children:
                                                                                                "Blog Grid",
                                                                                        }
                                                                                    ),
                                                                                ],
                                                                        }
                                                                    ),
                                                                    (0, l.jsxs)(
                                                                        "li",
                                                                        {
                                                                            className:
                                                                                "sub-nav-item ".concat(
                                                                                    e.includes(
                                                                                        "/blog/blog-detail-one"
                                                                                    )
                                                                                        ? "active"
                                                                                        : ""
                                                                                ),
                                                                            children:
                                                                                [
                                                                                    " ",
                                                                                    (0,
                                                                                    l.jsx)(
                                                                                        c.default,
                                                                                        {
                                                                                            className:
                                                                                                "sub-nav-link font-medium",
                                                                                            href: "/blog/blog-detail-one",
                                                                                            children:
                                                                                                "Blog Detail 1",
                                                                                        }
                                                                                    ),
                                                                                ],
                                                                        }
                                                                    ),
                                                                    (0, l.jsxs)(
                                                                        "li",
                                                                        {
                                                                            className:
                                                                                "sub-nav-item ".concat(
                                                                                    e.includes(
                                                                                        "/blog/blog-detail-two"
                                                                                    )
                                                                                        ? "active"
                                                                                        : ""
                                                                                ),
                                                                            children:
                                                                                [
                                                                                    " ",
                                                                                    (0,
                                                                                    l.jsx)(
                                                                                        c.default,
                                                                                        {
                                                                                            className:
                                                                                                "sub-nav-link font-medium",
                                                                                            href: "/blog/blog-detail-two",
                                                                                            children:
                                                                                                "Blog Detail 2",
                                                                                        }
                                                                                    ),
                                                                                ],
                                                                        }
                                                                    ),
                                                                ],
                                                            }),
                                                        ],
                                                    }),
                                                    (0, l.jsxs)("li", {
                                                        className:
                                                            "nav-item h-full flex items-center justify-center ".concat(
                                                                e.includes(
                                                                    "/contact/"
                                                                )
                                                                    ? "active"
                                                                    : ""
                                                            ),
                                                        children: [
                                                            (0, l.jsxs)(
                                                                c.default,
                                                                {
                                                                    className:
                                                                        "nav-link text-title flex items-center gap-1",
                                                                    href: "#!",
                                                                    children: [
                                                                        (0,
                                                                        l.jsx)(
                                                                            "span",
                                                                            {
                                                                                children:
                                                                                    "Contact",
                                                                            }
                                                                        ),
                                                                        (0,
                                                                        l.jsx)(
                                                                            "span",
                                                                            {
                                                                                children:
                                                                                    (0,
                                                                                    l.jsx)(
                                                                                        m.p,
                                                                                        {
                                                                                            className:
                                                                                                "text-sm",
                                                                                        }
                                                                                    ),
                                                                            }
                                                                        ),
                                                                    ],
                                                                }
                                                            ),
                                                            (0, l.jsxs)("ul", {
                                                                className:
                                                                    "sub-nav",
                                                                children: [
                                                                    (0, l.jsxs)(
                                                                        "li",
                                                                        {
                                                                            className:
                                                                                "sub-nav-item ".concat(
                                                                                    "/contact/contact-one" ===
                                                                                        e
                                                                                        ? "active"
                                                                                        : ""
                                                                                ),
                                                                            children:
                                                                                [
                                                                                    " ",
                                                                                    (0,
                                                                                    l.jsx)(
                                                                                        c.default,
                                                                                        {
                                                                                            className:
                                                                                                "sub-nav-link font-medium",
                                                                                            href: "/contact/contact-one",
                                                                                            children:
                                                                                                "Contact Style 1",
                                                                                        }
                                                                                    ),
                                                                                ],
                                                                        }
                                                                    ),
                                                                    (0, l.jsxs)(
                                                                        "li",
                                                                        {
                                                                            className:
                                                                                "sub-nav-item ".concat(
                                                                                    "/contact/contact-two" ===
                                                                                        e
                                                                                        ? "active"
                                                                                        : ""
                                                                                ),
                                                                            children:
                                                                                [
                                                                                    " ",
                                                                                    (0,
                                                                                    l.jsx)(
                                                                                        c.default,
                                                                                        {
                                                                                            className:
                                                                                                "sub-nav-link font-medium",
                                                                                            href: "/contact/contact-two",
                                                                                            children:
                                                                                                "Contact Style 2",
                                                                                        }
                                                                                    ),
                                                                                ],
                                                                        }
                                                                    ),
                                                                ],
                                                            }),
                                                        ],
                                                    }),
                                                ],
                                            }),
                                        }),
                                        (0, l.jsxs)("div", {
                                            className:
                                                "menu-right-block flex items-center",
                                            children: [
                                                (0, l.jsx)("div", {
                                                    className: "icon-call",
                                                    children: (0, l.jsx)("i", {
                                                        className:
                                                            "icon-phone-call text-4xl",
                                                    }),
                                                }),
                                                (0, l.jsxs)("div", {
                                                    className: "text ml-3",
                                                    children: [
                                                        (0, l.jsx)("div", {
                                                            className:
                                                                "text caption1",
                                                            children:
                                                                "Free Consultancy",
                                                        }),
                                                        (0, l.jsx)("div", {
                                                            className:
                                                                "number text-button",
                                                            children:
                                                                "+123 456 7890",
                                                        }),
                                                    ],
                                                }),
                                                (0, l.jsx)("div", {
                                                    className:
                                                        "menu-humburger hidden pointer",
                                                    onClick: () => o(!u),
                                                    children: (0, l.jsx)(r.a, {
                                                        className: "text-2xl",
                                                        weight: "bold",
                                                    }),
                                                }),
                                            ],
                                        }),
                                    ],
                                }),
                                (0, l.jsx)("div", {
                                    id: "menu-mobile-block",
                                    className: "".concat(u && "open"),
                                    children: (0, l.jsx)("div", {
                                        className: "menu-mobile-main",
                                        children: (0, l.jsx)("div", {
                                            className: "container",
                                            children: (0, l.jsxs)("ul", {
                                                className:
                                                    "menu-nav-mobile h-full pt-1 pb-1",
                                                children: [
                                                    (0, l.jsxs)("li", {
                                                        className:
                                                            "nav-item-mobile h-full flex-column gap-2 pt-2 pb-2 pl-3 pr-3 pointer home ".concat(
                                                                1 === h
                                                                    ? "active"
                                                                    : ""
                                                            ),
                                                        onClick: () => x(1),
                                                        children: [
                                                            (0, l.jsxs)("a", {
                                                                className:
                                                                    "nav-link-mobile flex items-center justify-between",
                                                                href: "#!",
                                                                children: [
                                                                    (0, l.jsx)(
                                                                        "span",
                                                                        {
                                                                            className:
                                                                                "body2 font-semibold",
                                                                            children:
                                                                                "Home ",
                                                                        }
                                                                    ),
                                                                    (0, l.jsx)(
                                                                        d.T,
                                                                        {
                                                                            className:
                                                                                "text-base",
                                                                        }
                                                                    ),
                                                                ],
                                                            }),
                                                            (0, l.jsxs)("ul", {
                                                                className:
                                                                    "sub-nav-mobile ".concat(
                                                                        1 === h
                                                                            ? "open"
                                                                            : ""
                                                                    ),
                                                                children: [
                                                                    (0, l.jsx)(
                                                                        "li",
                                                                        {
                                                                            className:
                                                                                "sub-nav-item pl-3 pr-3 pt-2 pb-2 active",
                                                                            children:
                                                                                (0,
                                                                                l.jsx)(
                                                                                    c.default,
                                                                                    {
                                                                                        className:
                                                                                            "sub-nav-link text-base",
                                                                                        href: "/",
                                                                                        children:
                                                                                            "Payment Solution",
                                                                                    }
                                                                                ),
                                                                        }
                                                                    ),
                                                                    (0, l.jsxs)(
                                                                        "li",
                                                                        {
                                                                            className:
                                                                                "sub-nav-item pl-3 pr-3 pt-2 pb-2",
                                                                            children:
                                                                                [
                                                                                    " ",
                                                                                    (0,
                                                                                    l.jsx)(
                                                                                        c.default,
                                                                                        {
                                                                                            className:
                                                                                                "sub-nav-link text-base",
                                                                                            href: "/homepages/home2",
                                                                                            children:
                                                                                                "Financial Planning",
                                                                                        }
                                                                                    ),
                                                                                ],
                                                                        }
                                                                    ),
                                                                    (0, l.jsxs)(
                                                                        "li",
                                                                        {
                                                                            className:
                                                                                "sub-nav-item pl-3 pr-3 pt-2 pb-2",
                                                                            children:
                                                                                [
                                                                                    " ",
                                                                                    (0,
                                                                                    l.jsx)(
                                                                                        c.default,
                                                                                        {
                                                                                            className:
                                                                                                "sub-nav-link text-base",
                                                                                            href: "/homepages/home3",
                                                                                            children:
                                                                                                "Online Banking",
                                                                                        }
                                                                                    ),
                                                                                ],
                                                                        }
                                                                    ),
                                                                    (0, l.jsxs)(
                                                                        "li",
                                                                        {
                                                                            className:
                                                                                "sub-nav-item pl-3 pr-3 pt-2 pb-2",
                                                                            children:
                                                                                [
                                                                                    " ",
                                                                                    (0,
                                                                                    l.jsx)(
                                                                                        c.default,
                                                                                        {
                                                                                            className:
                                                                                                "sub-nav-link text-base",
                                                                                            href: "/homepages/home4",
                                                                                            children:
                                                                                                "Personal Finance",
                                                                                        }
                                                                                    ),
                                                                                ],
                                                                        }
                                                                    ),
                                                                    (0, l.jsxs)(
                                                                        "li",
                                                                        {
                                                                            className:
                                                                                "sub-nav-item pl-3 pr-3 pt-2 pb-2",
                                                                            children:
                                                                                [
                                                                                    " ",
                                                                                    (0,
                                                                                    l.jsx)(
                                                                                        c.default,
                                                                                        {
                                                                                            className:
                                                                                                "sub-nav-link text-base",
                                                                                            href: "/homepages/home5",
                                                                                            children:
                                                                                                "Cryptocurrency Financial",
                                                                                        }
                                                                                    ),
                                                                                ],
                                                                        }
                                                                    ),
                                                                    (0, l.jsxs)(
                                                                        "li",
                                                                        {
                                                                            className:
                                                                                "sub-nav-item pl-3 pr-3 pt-2 pb-2",
                                                                            children:
                                                                                [
                                                                                    " ",
                                                                                    (0,
                                                                                    l.jsx)(
                                                                                        c.default,
                                                                                        {
                                                                                            className:
                                                                                                "sub-nav-link text-base",
                                                                                            href: "/homepages/home6",
                                                                                            children:
                                                                                                "Blockchain",
                                                                                        }
                                                                                    ),
                                                                                ],
                                                                        }
                                                                    ),
                                                                ],
                                                            }),
                                                        ],
                                                    }),
                                                    (0, l.jsxs)("li", {
                                                        className:
                                                            "nav-item-mobile h-full flex-column gap-2 pt-4 pb-2 pl-3 pr-3 pointer about ".concat(
                                                                2 === h
                                                                    ? "active"
                                                                    : ""
                                                            ),
                                                        onClick: () => x(2),
                                                        children: [
                                                            (0, l.jsxs)("a", {
                                                                className:
                                                                    "nav-link-mobile flex items-center justify-between",
                                                                href: "#!",
                                                                children: [
                                                                    (0, l.jsx)(
                                                                        "span",
                                                                        {
                                                                            className:
                                                                                "body2 font-semibold",
                                                                            children:
                                                                                "About ",
                                                                        }
                                                                    ),
                                                                    (0, l.jsx)(
                                                                        d.T,
                                                                        {
                                                                            className:
                                                                                "text-base",
                                                                        }
                                                                    ),
                                                                ],
                                                            }),
                                                            (0, l.jsxs)("ul", {
                                                                className:
                                                                    "sub-nav-mobile ".concat(
                                                                        2 === h
                                                                            ? "open"
                                                                            : ""
                                                                    ),
                                                                children: [
                                                                    (0, l.jsx)(
                                                                        "li",
                                                                        {
                                                                            className:
                                                                                "sub-nav-item pl-3 pr-3 pt-2 pb-2",
                                                                            children:
                                                                                (0,
                                                                                l.jsx)(
                                                                                    c.default,
                                                                                    {
                                                                                        className:
                                                                                            "sub-nav-link text-base",
                                                                                        href: "/about/about-one",
                                                                                        children:
                                                                                            "About Style 1",
                                                                                    }
                                                                                ),
                                                                        }
                                                                    ),
                                                                    (0, l.jsxs)(
                                                                        "li",
                                                                        {
                                                                            className:
                                                                                "sub-nav-item pl-3 pr-3 pt-2 pb-2",
                                                                            children:
                                                                                [
                                                                                    " ",
                                                                                    (0,
                                                                                    l.jsx)(
                                                                                        c.default,
                                                                                        {
                                                                                            className:
                                                                                                "sub-nav-link text-base",
                                                                                            href: "/about/about-two",
                                                                                            children:
                                                                                                "About Style 2",
                                                                                        }
                                                                                    ),
                                                                                ],
                                                                        }
                                                                    ),
                                                                ],
                                                            }),
                                                        ],
                                                    }),
                                                    (0, l.jsxs)("li", {
                                                        className:
                                                            "nav-item-mobile h-full flex-column gap-2 pt-4 pb-2 pl-3 pr-3 pointer services ".concat(
                                                                3 === h
                                                                    ? "active"
                                                                    : ""
                                                            ),
                                                        onClick: () => x(3),
                                                        children: [
                                                            (0, l.jsxs)("a", {
                                                                className:
                                                                    "nav-link-mobile flex items-center justify-between",
                                                                href: "#!",
                                                                children: [
                                                                    (0, l.jsx)(
                                                                        "span",
                                                                        {
                                                                            className:
                                                                                "body2 font-semibold",
                                                                            children:
                                                                                "Services ",
                                                                        }
                                                                    ),
                                                                    (0, l.jsx)(
                                                                        d.T,
                                                                        {
                                                                            className:
                                                                                "text-base",
                                                                        }
                                                                    ),
                                                                ],
                                                            }),
                                                            (0, l.jsxs)("ul", {
                                                                className:
                                                                    "sub-nav-mobile ".concat(
                                                                        3 === h
                                                                            ? "open"
                                                                            : ""
                                                                    ),
                                                                children: [
                                                                    (0, l.jsx)(
                                                                        "li",
                                                                        {
                                                                            className:
                                                                                "sub-nav-item pl-3 pr-3 pt-2 pb-2",
                                                                            children:
                                                                                (0,
                                                                                l.jsx)(
                                                                                    c.default,
                                                                                    {
                                                                                        className:
                                                                                            "sub-nav-link text-base",
                                                                                        href: "/service/service-one",
                                                                                        children:
                                                                                            "Service Style 1",
                                                                                    }
                                                                                ),
                                                                        }
                                                                    ),
                                                                    (0, l.jsxs)(
                                                                        "li",
                                                                        {
                                                                            className:
                                                                                "sub-nav-item pl-3 pr-3 pt-2 pb-2",
                                                                            children:
                                                                                [
                                                                                    " ",
                                                                                    (0,
                                                                                    l.jsx)(
                                                                                        c.default,
                                                                                        {
                                                                                            className:
                                                                                                "sub-nav-link text-base",
                                                                                            href: "/service/service-two",
                                                                                            children:
                                                                                                "Service Style 2",
                                                                                        }
                                                                                    ),
                                                                                ],
                                                                        }
                                                                    ),
                                                                    (0, l.jsxs)(
                                                                        "li",
                                                                        {
                                                                            className:
                                                                                "sub-nav-item pl-3 pr-3 pt-2 pb-2",
                                                                            children:
                                                                                [
                                                                                    " ",
                                                                                    (0,
                                                                                    l.jsx)(
                                                                                        c.default,
                                                                                        {
                                                                                            className:
                                                                                                "sub-nav-link text-base",
                                                                                            href: "/service/service-detail",
                                                                                            children:
                                                                                                "Services Detail",
                                                                                        }
                                                                                    ),
                                                                                ],
                                                                        }
                                                                    ),
                                                                ],
                                                            }),
                                                        ],
                                                    }),
                                                    (0, l.jsxs)("li", {
                                                        className:
                                                            "nav-item-mobile h-full flex-column gap-2 pt-4 pb-2 pl-3 pr-3 pointer case ".concat(
                                                                4 === h
                                                                    ? "active"
                                                                    : ""
                                                            ),
                                                        onClick: () => x(4),
                                                        children: [
                                                            (0, l.jsxs)("a", {
                                                                className:
                                                                    "nav-link-mobile flex items-center justify-between",
                                                                href: "#!",
                                                                children: [
                                                                    (0, l.jsx)(
                                                                        "span",
                                                                        {
                                                                            className:
                                                                                "body2 font-semibold",
                                                                            children:
                                                                                "Case Studies ",
                                                                        }
                                                                    ),
                                                                    (0, l.jsx)(
                                                                        d.T,
                                                                        {
                                                                            className:
                                                                                "text-base",
                                                                        }
                                                                    ),
                                                                ],
                                                            }),
                                                            (0, l.jsxs)("ul", {
                                                                className:
                                                                    "sub-nav-mobile ".concat(
                                                                        4 === h
                                                                            ? "open"
                                                                            : ""
                                                                    ),
                                                                children: [
                                                                    (0, l.jsxs)(
                                                                        "li",
                                                                        {
                                                                            className:
                                                                                "sub-nav-item pl-3 pr-3 pt-2 pb-2",
                                                                            children:
                                                                                [
                                                                                    " ",
                                                                                    (0,
                                                                                    l.jsx)(
                                                                                        c.default,
                                                                                        {
                                                                                            className:
                                                                                                "sub-nav-link text-base",
                                                                                            href: "/case-studies/case-studies-one",
                                                                                            children:
                                                                                                "Case Studies 1",
                                                                                        }
                                                                                    ),
                                                                                ],
                                                                        }
                                                                    ),
                                                                    (0, l.jsxs)(
                                                                        "li",
                                                                        {
                                                                            className:
                                                                                "sub-nav-item pl-3 pr-3 pt-2 pb-2",
                                                                            children:
                                                                                [
                                                                                    " ",
                                                                                    (0,
                                                                                    l.jsx)(
                                                                                        c.default,
                                                                                        {
                                                                                            className:
                                                                                                "sub-nav-link text-base",
                                                                                            href: "/case-studies/case-studies-two",
                                                                                            children:
                                                                                                "Case Studies 2",
                                                                                        }
                                                                                    ),
                                                                                ],
                                                                        }
                                                                    ),
                                                                    (0, l.jsxs)(
                                                                        "li",
                                                                        {
                                                                            className:
                                                                                "sub-nav-item pl-3 pr-3 pt-2 pb-2",
                                                                            children:
                                                                                [
                                                                                    " ",
                                                                                    (0,
                                                                                    l.jsx)(
                                                                                        c.default,
                                                                                        {
                                                                                            className:
                                                                                                "sub-nav-link text-base",
                                                                                            href: "/case-studies/detail",
                                                                                            children:
                                                                                                "Case Studies Detail",
                                                                                        }
                                                                                    ),
                                                                                ],
                                                                        }
                                                                    ),
                                                                ],
                                                            }),
                                                        ],
                                                    }),
                                                    (0, l.jsxs)("li", {
                                                        className:
                                                            "nav-item-mobile h-full flex-column gap-2 pt-4 pb-2 pl-3 pr-3 pointer pages ".concat(
                                                                5 === h
                                                                    ? "active"
                                                                    : ""
                                                            ),
                                                        onClick: () => x(5),
                                                        children: [
                                                            (0, l.jsxs)("a", {
                                                                className:
                                                                    "nav-link-mobile flex items-center justify-between",
                                                                href: "#!",
                                                                children: [
                                                                    (0, l.jsx)(
                                                                        "span",
                                                                        {
                                                                            className:
                                                                                "body2 font-semibold",
                                                                            children:
                                                                                "Pages ",
                                                                        }
                                                                    ),
                                                                    (0, l.jsx)(
                                                                        d.T,
                                                                        {
                                                                            className:
                                                                                "text-base",
                                                                        }
                                                                    ),
                                                                ],
                                                            }),
                                                            (0, l.jsxs)("ul", {
                                                                className:
                                                                    "sub-nav-mobile ".concat(
                                                                        5 === h
                                                                            ? "open"
                                                                            : ""
                                                                    ),
                                                                children: [
                                                                    (0, l.jsx)(
                                                                        "li",
                                                                        {
                                                                            className:
                                                                                "sub-nav-item pl-3 pr-3 pt-2 pb-2",
                                                                            children:
                                                                                (0,
                                                                                l.jsx)(
                                                                                    c.default,
                                                                                    {
                                                                                        className:
                                                                                            "sub-nav-link text-base",
                                                                                        href: "/pages/faqs",
                                                                                        children:
                                                                                            "FAQs",
                                                                                    }
                                                                                ),
                                                                        }
                                                                    ),
                                                                    (0, l.jsxs)(
                                                                        "li",
                                                                        {
                                                                            className:
                                                                                "sub-nav-item pl-3 pr-3 pt-2 pb-2",
                                                                            children:
                                                                                [
                                                                                    " ",
                                                                                    (0,
                                                                                    l.jsx)(
                                                                                        c.default,
                                                                                        {
                                                                                            className:
                                                                                                "sub-nav-link text-base",
                                                                                            href: "/pages/pricing",
                                                                                            children:
                                                                                                "Pricing",
                                                                                        }
                                                                                    ),
                                                                                ],
                                                                        }
                                                                    ),
                                                                    (0, l.jsxs)(
                                                                        "li",
                                                                        {
                                                                            className:
                                                                                "sub-nav-item pl-3 pr-3 pt-2 pb-2",
                                                                            children:
                                                                                [
                                                                                    " ",
                                                                                    (0,
                                                                                    l.jsx)(
                                                                                        c.default,
                                                                                        {
                                                                                            className:
                                                                                                "sub-nav-link text-base",
                                                                                            href: "/pages/partners",
                                                                                            children:
                                                                                                "Partners",
                                                                                        }
                                                                                    ),
                                                                                ],
                                                                        }
                                                                    ),
                                                                ],
                                                            }),
                                                        ],
                                                    }),
                                                    (0, l.jsxs)("li", {
                                                        className:
                                                            "nav-item-mobile h-full flex-column gap-2 pt-4 pb-2 pl-3 pr-3 pointer blog ".concat(
                                                                6 === h
                                                                    ? "active"
                                                                    : ""
                                                            ),
                                                        onClick: () => x(6),
                                                        children: [
                                                            (0, l.jsxs)("a", {
                                                                className:
                                                                    "nav-link-mobile flex items-center justify-between",
                                                                href: "#!",
                                                                children: [
                                                                    (0, l.jsx)(
                                                                        "span",
                                                                        {
                                                                            className:
                                                                                "body2 font-semibold",
                                                                            children:
                                                                                "Blog ",
                                                                        }
                                                                    ),
                                                                    (0, l.jsx)(
                                                                        d.T,
                                                                        {
                                                                            className:
                                                                                "text-base",
                                                                        }
                                                                    ),
                                                                ],
                                                            }),
                                                            (0, l.jsxs)("ul", {
                                                                className:
                                                                    "sub-nav-mobile ".concat(
                                                                        6 === h
                                                                            ? "open"
                                                                            : ""
                                                                    ),
                                                                children: [
                                                                    (0, l.jsx)(
                                                                        "li",
                                                                        {
                                                                            className:
                                                                                "sub-nav-item pl-3 pr-3 pt-2 pb-2",
                                                                            children:
                                                                                (0,
                                                                                l.jsx)(
                                                                                    c.default,
                                                                                    {
                                                                                        className:
                                                                                            "sub-nav-link text-base",
                                                                                        href: "/blog/blog-list-one",
                                                                                        children:
                                                                                            "Blog List 1",
                                                                                    }
                                                                                ),
                                                                        }
                                                                    ),
                                                                    (0, l.jsxs)(
                                                                        "li",
                                                                        {
                                                                            className:
                                                                                "sub-nav-item pl-3 pr-3 pt-2 pb-2",
                                                                            children:
                                                                                [
                                                                                    " ",
                                                                                    (0,
                                                                                    l.jsx)(
                                                                                        c.default,
                                                                                        {
                                                                                            className:
                                                                                                "sub-nav-link text-base",
                                                                                            href: "/blog/blog-list-two",
                                                                                            children:
                                                                                                "Blog List 2",
                                                                                        }
                                                                                    ),
                                                                                ],
                                                                        }
                                                                    ),
                                                                    (0, l.jsx)(
                                                                        "li",
                                                                        {
                                                                            className:
                                                                                "sub-nav-item pl-3 pr-3 pt-2 pb-2",
                                                                            children:
                                                                                (0,
                                                                                l.jsx)(
                                                                                    c.default,
                                                                                    {
                                                                                        className:
                                                                                            "sub-nav-link text-base",
                                                                                        href: "/blog/blog-grid",
                                                                                        children:
                                                                                            "Blog Grid",
                                                                                    }
                                                                                ),
                                                                        }
                                                                    ),
                                                                    (0, l.jsx)(
                                                                        "li",
                                                                        {
                                                                            className:
                                                                                "sub-nav-item pl-3 pr-3 pt-2 pb-2",
                                                                            children:
                                                                                (0,
                                                                                l.jsx)(
                                                                                    c.default,
                                                                                    {
                                                                                        className:
                                                                                            "sub-nav-link text-base",
                                                                                        href: "/blog/blog-detail-one",
                                                                                        children:
                                                                                            "Blog Detail 1",
                                                                                    }
                                                                                ),
                                                                        }
                                                                    ),
                                                                    (0, l.jsxs)(
                                                                        "li",
                                                                        {
                                                                            className:
                                                                                "sub-nav-item pl-3 pr-3 pt-2 pb-2",
                                                                            children:
                                                                                [
                                                                                    " ",
                                                                                    (0,
                                                                                    l.jsx)(
                                                                                        c.default,
                                                                                        {
                                                                                            className:
                                                                                                "sub-nav-link text-base",
                                                                                            href: "/blog/blog-detail-two",
                                                                                            children:
                                                                                                "Blog Detail 2",
                                                                                        }
                                                                                    ),
                                                                                ],
                                                                        }
                                                                    ),
                                                                ],
                                                            }),
                                                        ],
                                                    }),
                                                    (0, l.jsxs)("li", {
                                                        className:
                                                            "nav-item-mobile h-full flex-column gap-2 pt-4 pb-2 pl-3 pr-3 pointer contact ".concat(
                                                                7 === h
                                                                    ? "active"
                                                                    : ""
                                                            ),
                                                        onClick: () => x(7),
                                                        children: [
                                                            (0, l.jsxs)("a", {
                                                                className:
                                                                    "nav-link-mobile flex items-center justify-between",
                                                                href: "#!",
                                                                children: [
                                                                    (0, l.jsx)(
                                                                        "span",
                                                                        {
                                                                            className:
                                                                                "body2 font-semibold",
                                                                            children:
                                                                                "Contact ",
                                                                        }
                                                                    ),
                                                                    (0, l.jsx)(
                                                                        d.T,
                                                                        {
                                                                            className:
                                                                                "text-base",
                                                                        }
                                                                    ),
                                                                ],
                                                            }),
                                                            (0, l.jsxs)("ul", {
                                                                className:
                                                                    "sub-nav-mobile ".concat(
                                                                        7 === h
                                                                            ? "open"
                                                                            : ""
                                                                    ),
                                                                children: [
                                                                    (0, l.jsx)(
                                                                        "li",
                                                                        {
                                                                            className:
                                                                                "sub-nav-item pl-3 pr-3 pt-2 pb-2",
                                                                            children:
                                                                                (0,
                                                                                l.jsx)(
                                                                                    c.default,
                                                                                    {
                                                                                        className:
                                                                                            "sub-nav-link text-base",
                                                                                        href: "/contact/contact-one",
                                                                                        children:
                                                                                            "Contact Style 1",
                                                                                    }
                                                                                ),
                                                                        }
                                                                    ),
                                                                    (0, l.jsxs)(
                                                                        "li",
                                                                        {
                                                                            className:
                                                                                "sub-nav-item pl-3 pr-3 pt-2 pb-2",
                                                                            children:
                                                                                [
                                                                                    " ",
                                                                                    (0,
                                                                                    l.jsx)(
                                                                                        c.default,
                                                                                        {
                                                                                            className:
                                                                                                "sub-nav-link text-base",
                                                                                            href: "/contact/contact-two",
                                                                                            children:
                                                                                                "Contact Style 2",
                                                                                        }
                                                                                    ),
                                                                                ],
                                                                        }
                                                                    ),
                                                                ],
                                                            }),
                                                        ],
                                                    }),
                                                ],
                                            }),
                                        }),
                                    }),
                                }),
                            ],
                        }),
                    })
                );
            };
        },
    },
]);
