<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - SocialFund</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            dark: '#0a2342', // dark blue
                            DEFAULT: '#134074',
                            light: '#13678a',
                        },
                        secondary: {
                            dark: '#1a936f', // green
                            DEFAULT: '#45c4b0',
                            light: '#9cf6f6',
                        }
                    }
                }
            }
        }
    </script>
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-50 min-h-screen flex flex-col">
    <!-- Navigation Bar -->
    <nav class="bg-primary-dark text-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0 flex items-center">
                        <i class="fas fa-seedling text-secondary-DEFAULT mr-2 text-2xl"></i>
                        <span class="font-bold text-xl">SocialFund</span>
                    </div>
                    <div class="hidden md:ml-6 md:flex md:items-center md:space-x-4">
                        <a href="index.php" class="px-3 py-2 rounded-md text-sm font-medium text-white bg-primary hover:bg-primary-light">Home</a>
                        <a href="discover.php" class="px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:text-white hover:bg-primary-light">Discover</a>
                        <a href="start-project.php" class="px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:text-white hover:bg-primary-light">Start a Project</a>
                        <a href="how-it-works.php" class="px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:text-white hover:bg-primary-light">How It Works</a>
                        <a href="about.php" class="px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:text-white hover:bg-primary-light">About Us</a>
                    </div>
                </div>
                <div class="hidden md:flex items-center">
                    <a href="login.php" class="px-4 py-2 text-sm font-medium text-white hover:bg-primary-light rounded-md">Log In</a>
                    <a href="signup.php" class="ml-4 px-4 py-2 text-sm font-medium text-white bg-secondary-dark hover:bg-secondary rounded-md">Sign Up</a>
                </div>
                <div class="flex items-center md:hidden">
                    <button type="button" class="mobile-menu-button inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-primary-light focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                        <span class="sr-only">Open main menu</span>
                        <i class="fas fa-bars text-white text-xl"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="md:hidden mobile-menu hidden">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="index.php" class="block px-3 py-2 rounded-md text-base font-medium text-white bg-primary-light">Home</a>
                <a href="discover.php" class="block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-primary-light">Discover</a>
                <a href="start-project.php" class="block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-primary-light">Start a Project</a>
                <a href="how-it-works.php" class="block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-primary-light">How It Works</a>
                <a href="about.php" class="block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-primary-light">About Us</a>
                <div class="border-t border-gray-700 pt-4 pb-3 mt-3">
                    <a href="login.php" class="block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-primary-light">Log In</a>
                    <a href="signup.php" class="block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-primary-light">Sign Up</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-primary text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="text-center">
                <h1 class="text-4xl font-bold tracking-tight mb-4">About SocialFund</h1>
                <p class="text-xl max-w-3xl mx-auto">Connecting passionate changemakers with supporters to create positive social impact around the world.</p>
            </div>
        </div>
    </section>

    <!-- Our Story Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-bold text-primary-dark mb-6">Our Story</h2>
                    <p class="text-gray-600 mb-4">SocialFund was founded in 2020 with a simple mission: to democratize funding for social impact initiatives around the world. We believe that meaningful change often starts at the grassroots level, but many brilliant ideas never reach their full potential due to lack of resources.</p>
                    <p class="text-gray-600 mb-4">Our founders, a diverse team of social entrepreneurs, technologists, and community organizers, experienced firsthand the challenges of securing funding for social projects. They envisioned a platform that would not only provide financial resources but also build communities around causes that matter.</p>
                    <p class="text-gray-600">Today, SocialFund has helped fund over 320 projects across 45 countries, connecting passionate change-makers with supporters who believe in their vision for a better world.</p>
                </div>
                <div>
                    <img src="/api/placeholder/600/400" alt="SocialFund Team" class="rounded-lg shadow-xl" />
                </div>
            </div>
        </div>
    </section>

    <!-- Our Mission Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-primary-dark">Our Mission & Values</h2>
                <p class="mt-4 text-lg text-gray-600 max-w-3xl mx-auto">We're driven by a commitment to social equity, sustainability, and community empowerment.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-lg shadow-lg">
                    <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-primary-light text-white mb-6">
                        <i class="fas fa-hands-helping text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-primary-dark mb-4">Accessibility</h3>
                    <p class="text-gray-600">We believe funding for social impact should be accessible to everyone with a meaningful idea, regardless of their background, connections, or location.</p>
                </div>
                
                <div class="bg-white p-8 rounded-lg shadow-lg">
                    <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-primary-light text-white mb-6">
                        <i class="fas fa-globe-americas text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-primary-dark mb-4">Sustainability</h3>
                    <p class="text-gray-600">We prioritize projects that create lasting positive impact and contribute to environmental, social, and economic sustainability.</p>
                </div>
                
                <div class="bg-white p-8 rounded-lg shadow-lg">
                    <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-primary-light text-white mb-6">
                        <i class="fas fa-users text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-primary-dark mb-4">Community</h3>
                    <p class="text-gray-600">We foster connections between project creators and supporters that go beyond financial transactions to build lasting community around shared values.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-primary-dark">Meet Our Team</h2>
                <p class="mt-4 text-lg text-gray-600 max-w-3xl mx-auto">Passionate individuals committed to helping social initiatives thrive.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Team Member 1 -->
                <div class="bg-gray-50 rounded-lg overflow-hidden text-center">
                    <img src="/api/placeholder/300/300" alt="Team Member" class="w-full h-64 object-cover" />
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-primary-dark">Elena Rodriguez</h3>
                        <p class="text-gray-600 mb-3">Co-Founder & CEO</p>
                        <p class="text-gray-600 text-sm mb-4">Former nonprofit executive with 15+ years of experience in social enterprise development.</p>
                        <div class="flex justify-center space-x-4">
                            <a href="#" class="text-primary-light hover:text-primary-dark">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="text-primary-light hover:text-primary-dark">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Team Member 2 -->
                <div class="bg-gray-50 rounded-lg overflow-hidden text-center">
                    <img src="/api/placeholder/300/300" alt="Team Member" class="w-full h-64 object-cover" />
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-primary-dark">Marcus Chen</h3>
                        <p class="text-gray-600 mb-3">Co-Founder & CTO</p>
                        <p class="text-gray-600 text-sm mb-4">Tech entrepreneur with a background in fintech and a passion for using technology for social good.</p>
                        <div class="flex justify-center space-x-4">
                            <a href="#" class="text-primary-light hover:text-primary-dark">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="text-primary-light hover:text-primary-dark">
                                <i class="fab fa-github"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Team Member 3 -->
                <div class="bg-gray-50 rounded-lg overflow-hidden text-center">
                    <img src="/api/placeholder/300/300" alt="Team Member" class="w-full h-64 object-cover" />
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-primary-dark">Aisha Okafor</h3>
                        <p class="text-gray-600 mb-3">Head of Operations</p>
                        <p class="text-gray-600 text-sm mb-4">International development specialist with expertise in community-led initiatives across Africa and Asia.</p>
                        <div class="flex justify-center space-x-4">
                            <a href="#" class="text-primary-light hover:text-primary-dark">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="text-primary-light hover:text-primary-dark">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Team Member 4 -->
                <div class="bg-gray-50 rounded-lg overflow-hidden text-center">
                    <img src="/api/placeholder/300/300" alt="Team Member" class="w-full h-64 object-cover" />
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-primary-dark">David Patel</h3>
                        <p class="text-gray-600 mb-3">Head of Partnerships</p>
                        <p class="text-gray-600 text-sm mb-4">Former foundation director with extensive experience in building cross-sector collaborations.</p>
                        <div class="flex justify-center space-x-4">
                            <a href="#" class="text-primary-light hover:text-primary-dark">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="text-primary-light hover:text-primary-dark">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Impact Stats Section -->
    <section class="py-16 bg-primary text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold">Our Impact</h2>
                <p class="mt-4 text-lg max-w-3xl mx-auto">Since 2020, we've helped fund initiatives that are changing lives and communities.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 text-center">
                <div class="p-6">
                    <p class="text-4xl font-bold text-secondary-light">320+</p>
                    <p class="mt-2 text-lg">Projects Funded</p>
                </div>
                <div class="p-6">
                    <p class="text-4xl font-bold text-secondary-light">$1.2M+</p>
                    <p class="mt-2 text-lg">Total Funds Raised</p>
                </div>
                <div class="p-6">
                    <p class="text-4xl font-bold text-secondary-light">45</p>
                    <p class="mt-2 text-lg">Countries Reached</p>
                </div>
                <div class="p-6">
                    <p class="text-4xl font-bold text-secondary-light">15K+</p>
                    <p class="mt-2 text-lg">Global Supporters</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Join Our Team Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-gray-50 rounded-lg shadow-lg overflow-hidden">
                <div class="grid grid-cols-1 lg:grid-cols-2">
                    <div class="p-10">
                        <h2 class="text-3xl font-bold text-primary-dark mb-4">Join Our Team</h2>
                        <p class="text-gray-600 mb-6">We're always looking for passionate individuals who share our mission of empowering social impact initiatives.</p>
                        <p class="text-gray-600 mb-6">We offer a collaborative work environment, competitive benefits, and the opportunity to make a real difference in communities around the world.</p>
                        <a href="careers.html" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-primary hover:bg-primary-light">
                            View Open Positions <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                    <div class="hidden lg:block">
                        <img src="/api/placeholder/600/400" alt="Team Collaboration" class="w-full h-full object-cover" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact CTA -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold text-primary-dark mb-4">Have Questions?</h2>
            <p class="text-gray-600 max-w-3xl mx-auto mb-8">We'd love to hear from you. Reach out to our team with any questions about SocialFund.</p>
            <a href="contact.html" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-primary hover:bg-primary-light">
                Contact Us <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-primary text-white pt-12 pb-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
                <div>
                    <div class="flex items-center mb-4">
                        <i class="fas fa-seedling text-secondary-DEFAULT mr-2 text-2xl"></i>
                        <span class="font-bold text-xl">SocialFund</span>
                    </div>
                    <p class="text-gray-300">Connecting social initiatives with supporters to create positive change in communities worldwide.</p>
                    <div class="flex mt-4 space-x-4">
                        <a href="#" class="text-gray-300 hover:text-white">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="index.html" class="text-gray-300 hover:text-white">Home</a></li>
                        <li><a href="discover.html" class="text-gray-300 hover:text-white">Discover Projects</a></li>
                        <li><a href="start-project.html" class="text-gray-300 hover:text-white">Start a Project</a></li>
                        <li><a href="how-it-works.html" class="text-gray-300 hover:text-white">How It Works</a></li>
                        <li><a href="about.html" class="text-gray-300 hover:text-white">About Us</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold mb-4">Resources</h3>
                    <ul class="space-y-2">
                        <li><a href="faq.html" class="text-gray-300 hover:text-white">FAQ</a></li>
                        <li><a href="blog.html" class="text-gray-300 hover:text-white">Blog</a></li>
                        <li><a href="success-stories.html" class="text-gray-300 hover:text-white">Success Stories</a></li>
                        <li><a href="guidelines.html" class="text-gray-300 hover:text-white">Project Guidelines</a></li>
                        <li><a href="contact.html" class="text-gray-300 hover:text-white">Contact Us</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold mb-4">Subscribe</h3>
                    <p class="text-gray-300 mb-4">Stay updated with the latest projects and news.</p>
                    <form class="flex flex-col space-y-4">
                        <input type="email" placeholder="Enter your email" class="px-4 py-2 bg-primary-light text-white rounded-md placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-secondary" />
                        <button type="submit" class="px-4 py-2 bg-secondary-dark hover:bg-secondary text-white rounded-md">Subscribe</button>
                    </form>
                </div>
            </div>
            
            <div class="border-t border-primary-light pt-6">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <p class="text-gray-300">&copy; 2025 SocialFund. All rights reserved.</p>
                    <div class="flex space-x-6 mt-4 md:mt-0">
                        <a href="terms.html" class="text-gray-300 hover:text-white">Terms of Service</a>
                        <a href="privacy.html" class="text-gray-300 hover:text-white">Privacy Policy</a>
                        <a href="cookie-policy.html" class="text-gray-300 hover:text-white">Cookie Policy</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        document.querySelector('.mobile-menu-button').addEventListener('click', function() {
            document.querySelector('.mobile-menu').classList.toggle('hidden');
        });
    </script>
</body>
</html>