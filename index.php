<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SocialFund - Crowdfunding for Social Impact</title>
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
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 lg:py-24">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h1 class="text-4xl lg:text-5xl font-bold tracking-tight">Crowdfunding for Social Impact</h1>
                    <p class="mt-4 text-lg lg:text-xl text-gray-100">Connect with donors and communities to fund your social initiatives. Make a difference together.</p>
                    <div class="mt-8 flex flex-col sm:flex-row gap-4">
                        <a href="discover.php" class="inline-flex justify-center items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-primary-dark bg-white hover:bg-gray-200">
                            Discover Projects
                        </a>
                        <a href="start-project.php" class="inline-flex justify-center items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-secondary-dark hover:bg-secondary">
                            Start a Project
                        </a>
                    </div>
                </div>
                <div class="hidden lg:block">
                    <img src="/api/placeholder/600/400" alt="Social Impact Crowdfunding" class="rounded-lg shadow-xl" />
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                <div class="bg-white p-8 rounded-lg shadow">
                    <p class="text-4xl font-bold text-primary-dark">320+</p>
                    <p class="mt-2 text-lg text-gray-600">Projects Funded</p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow">
                    <p class="text-4xl font-bold text-primary-dark">$1.2M+</p>
                    <p class="mt-2 text-lg text-gray-600">Total Funded</p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow">
                    <p class="text-4xl font-bold text-primary-dark">15K+</p>
                    <p class="mt-2 text-lg text-gray-600">Global Supporters</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Projects Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-primary-dark">Featured Projects</h2>
                <p class="mt-4 text-lg text-gray-600 max-w-3xl mx-auto">Discover impactful initiatives that are making a difference in communities around the world.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Project Card 1 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-lg border border-gray-200">
                    <img src="/api/placeholder/400/250" alt="Clean Water Initiative" class="w-full h-48 object-cover" />
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-3">
                            <span class="text-xs font-semibold px-2 py-1 bg-secondary-light text-primary-dark rounded-full">Environment</span>
                            <span class="text-xs text-gray-500">14 days left</span>
                        </div>
                        <h3 class="text-xl font-bold text-primary-dark mb-2">Clean Water Initiative</h3>
                        <p class="text-gray-600 mb-4 line-clamp-3">Providing clean water solutions to rural communities facing water scarcity and contamination issues.</p>
                        <div class="mb-4">
                            <div class="w-full bg-gray-200 rounded-full h-2.5">
                                <div class="bg-secondary-dark h-2.5 rounded-full" style="width: 75%"></div>
                            </div>
                            <div class="flex justify-between mt-2 text-sm text-gray-600">
                                <span>$15,000 raised</span>
                                <span>75% of $20,000</span>
                            </div>
                        </div>
                        <a href="project-details.html" class="block text-center w-full px-4 py-2 bg-primary hover:bg-primary-light text-white rounded-md">View Project</a>
                    </div>
                </div>
                
                <!-- Project Card 2 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-lg border border-gray-200">
                    <img src="/api/placeholder/400/250" alt="Community Garden" class="w-full h-48 object-cover" />
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-3">
                            <span class="text-xs font-semibold px-2 py-1 bg-secondary-light text-primary-dark rounded-full">Community</span>
                            <span class="text-xs text-gray-500">23 days left</span>
                        </div>
                        <h3 class="text-xl font-bold text-primary-dark mb-2">Urban Community Garden</h3>
                        <p class="text-gray-600 mb-4 line-clamp-3">Creating accessible green spaces in urban areas to promote sustainable food production and community bonding.</p>
                        <div class="mb-4">
                            <div class="w-full bg-gray-200 rounded-full h-2.5">
                                <div class="bg-secondary-dark h-2.5 rounded-full" style="width: 45%"></div>
                            </div>
                            <div class="flex justify-between mt-2 text-sm text-gray-600">
                                <span>$4,500 raised</span>
                                <span>45% of $10,000</span>
                            </div>
                        </div>
                        <a href="project-details.html" class="block text-center w-full px-4 py-2 bg-primary hover:bg-primary-light text-white rounded-md">View Project</a>
                    </div>
                </div>
                
                <!-- Project Card 3 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-lg border border-gray-200">
                    <img src="/api/placeholder/400/250" alt="Digital Education" class="w-full h-48 object-cover" />
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-3">
                            <span class="text-xs font-semibold px-2 py-1 bg-secondary-light text-primary-dark rounded-full">Education</span>
                            <span class="text-xs text-gray-500">7 days left</span>
                        </div>
                        <h3 class="text-xl font-bold text-primary-dark mb-2">Digital Literacy for All</h3>
                        <p class="text-gray-600 mb-4 line-clamp-3">Providing technology access and digital skills training to underserved communities to bridge the digital divide.</p>
                        <div class="mb-4">
                            <div class="w-full bg-gray-200 rounded-full h-2.5">
                                <div class="bg-secondary-dark h-2.5 rounded-full" style="width: 90%"></div>
                            </div>
                            <div class="flex justify-between mt-2 text-sm text-gray-600">
                                <span>$27,000 raised</span>
                                <span>90% of $30,000</span>
                            </div>
                        </div>
                        <a href="project-details.html" class="block text-center w-full px-4 py-2 bg-primary hover:bg-primary-light text-white rounded-md">View Project</a>
                    </div>
                </div>
            </div>
            <div class="text-center mt-12">
                <a href="discover.php" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-primary hover:bg-primary-light">
                    View All Projects <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-primary-dark">How It Works</h2>
                <p class="mt-4 text-lg text-gray-600 max-w-3xl mx-auto">Simple steps to start funding your social initiative or support others.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-lg shadow-lg text-center">
                    <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-primary-light text-white mb-6">
                        <i class="fas fa-lightbulb text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-primary-dark mb-4">Create a Project</h3>
                    <p class="text-gray-600">Share your social initiative with details about your goals, timeline, and funding needs.</p>
                </div>
                
                <div class="bg-white p-8 rounded-lg shadow-lg text-center">
                    <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-primary-light text-white mb-6">
                        <i class="fas fa-hand-holding-heart text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-primary-dark mb-4">Gain Support</h3>
                    <p class="text-gray-600">Connect with donors who believe in your mission and want to contribute to your success.</p>
                </div>
                
                <div class="bg-white p-8 rounded-lg shadow-lg text-center">
                    <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-primary-light text-white mb-6">
                        <i class="fas fa-rocket text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-primary-dark mb-4">Make an Impact</h3>
                    <p class="text-gray-600">Receive funds, implement your project, and share updates with your supporters.</p>
                </div>
            </div>
            <div class="text-center mt-12">
                <a href="how-it-works.php" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-primary hover:bg-primary-light">
                    Learn More <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-primary-dark">Success Stories</h2>
                <p class="mt-4 text-lg text-gray-600 max-w-3xl mx-auto">Hear from project creators who have successfully funded their initiatives.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-gray-50 p-8 rounded-lg">
                    <div class="flex items-center mb-6">
                        <img src="/api/placeholder/80/80" alt="Profile" class="w-16 h-16 rounded-full object-cover" />
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-primary-dark">Sarah Johnson</h3>
                            <p class="text-gray-600">Environmental Activist</p>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">"Thanks to SocialFund, we were able to raise enough money to clean up the local river and establish a sustainable maintenance program. The platform made it easy to share our story and connect with supporters."</p>
                </div>
                
                <div class="bg-gray-50 p-8 rounded-lg">
                    <div class="flex items-center mb-6">
                        <img src="/api/placeholder/80/80" alt="Profile" class="w-16 h-16 rounded-full object-cover" />
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-primary-dark">Michael Chen</h3>
                            <p class="text-gray-600">Education Advocate</p>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">"Our after-school program would not exist without the support we received through SocialFund. We now provide educational opportunities to over 100 children in our community."</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-primary-dark text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold">Ready to Make a Difference?</h2>
            <p class="mt-4 text-lg max-w-3xl mx-auto">Join our community of changemakers and supporters dedicated to creating positive social impact.</p>
            <div class="mt-8 flex flex-col sm:flex-row justify-center gap-4">
                <a href="discover.php" class="inline-flex justify-center items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-primary-dark bg-white hover:bg-gray-200">
                    Support a Project
                </a>
                <a href="start-project.php" class="inline-flex justify-center items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-secondary-dark hover:bg-secondary">
                    Start Your Project
                </a>
            </div>
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
                        <li><a href="index.php" class="text-gray-300 hover:text-white">Home</a></li>
                        <li><a href="discover.php" class="text-gray-300 hover:text-white">Discover Projects</a></li>
                        <li><a href="start-project.php" class="text-gray-300 hover:text-white">Start a Project</a></li>
                        <li><a href="how-it-works.php" class="text-gray-300 hover:text-white">How It Works</a></li>
                        <li><a href="about.php" class="text-gray-300 hover:text-white">About Us</a></li>
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