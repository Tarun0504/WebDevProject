<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discover Projects - SocialFund</title>
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

    <!-- Page Header -->
    <div class="bg-primary text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <h1 class="text-3xl font-bold">Discover Projects</h1>
            <p class="mt-2 text-lg">Browse and support impactful social initiatives from around the world.</p>
        </div>
    </div>

    <!-- Main Content -->
    <main class="flex-grow py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:grid lg:grid-cols-12 lg:gap-8">
                <!-- Sidebar Filters -->
                <div class="lg:col-span-3">
                    <div class="bg-white rounded-lg shadow-md p-6 sticky top-4">
                        <h2 class="text-xl font-bold text-primary-dark mb-4">Filters</h2>
                        
                        <div class="mb-6">
                            <h3 class="font-semibold text-gray-700 mb-2">Categories</h3>
                            <div class="space-y-2">
                                <label class="flex items-center">
                                    <input type="checkbox" class="form-checkbox h-4 w-4 text-secondary-dark" checked>
                                    <span class="ml-2 text-gray-700">Environment (12)</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="form-checkbox h-4 w-4 text-secondary-dark" checked>
                                    <span class="ml-2 text-gray-700">Education (15)</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="form-checkbox h-4 w-4 text-secondary-dark" checked>
                                    <span class="ml-2 text-gray-700">Health (8)</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="form-checkbox h-4 w-4 text-secondary-dark" checked>
                                    <span class="ml-2 text-gray-700">Community (14)</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="form-checkbox h-4 w-4 text-secondary-dark" checked>
                                    <span class="ml-2 text-gray-700">Technology (6)</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="form-checkbox h-4 w-4 text-secondary-dark" checked>
                                    <span class="ml-2 text-gray-700">Arts & Culture (9)</span>
                                </label>
                            </div>
                        </div>
                        
                        <div class="mb-6">
                            <h3 class="font-semibold text-gray-700 mb-2">Funding Progress</h3>
                            <div class="space-y-2">
                                <label class="flex items-center">
                                    <input type="checkbox" class="form-checkbox h-4 w-4 text-secondary-dark">
                                    <span class="ml-2 text-gray-700">Less than 25%</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="form-checkbox h-4 w-4 text-secondary-dark">
                                    <span class="ml-2 text-gray-700">25% - 50%</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="form-checkbox h-4 w-4 text-secondary-dark">
                                    <span class="ml-2 text-gray-700">50% - 75%</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="form-checkbox h-4 w-4 text-secondary-dark">
                                    <span class="ml-2 text-gray-700">75% - 100%</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="form-checkbox h-4 w-4 text-secondary-dark">
                                    <span class="ml-2 text-gray-700">Fully Funded</span>
                                </label>
                            </div>
                        </div>
                        
                        <div class="mb-6">
                            <h3 class="font-semibold text-gray-700 mb-2">Location</h3>
                            <select class="w-full p-2 border border-gray-300 rounded-md">
                                <option>All Locations</option>
                                <option>North America</option>
                                <option>South America</option>
                                <option>Europe</option>
                                <option>Africa</option>
                                <option>Asia</option>
                                <option>Australia</option>
                            </select>
                        </div>
                        
                        <div class="mb-6">
                            <h3 class="font-semibold text-gray-700 mb-2">Time Left</h3>
                            <div class="space-y-2">
                                <label class="flex items-center">
                                    <input type="checkbox" class="form-checkbox h-4 w-4 text-secondary-dark">
                                    <span class="ml-2 text-gray-700">Ending Soon (< 7 days)</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="form-checkbox h-4 w-4 text-secondary-dark">
                                    <span class="ml-2 text-gray-700">1-2 weeks</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="form-checkbox h-4 w-4 text-secondary-dark">
                                    <span class="ml-2 text-gray-700">2-4 weeks</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="form-checkbox h-4 w-4 text-secondary-dark">
                                    <span class="ml-2 text-gray-700">Over 1 month</span>
                                </label>
                            </div>
                        </div>
                        
                        <button class="w-full py-2 px-4 bg-secondary-dark hover:bg-secondary text-white rounded-md font-medium">Apply Filters</button>
                        <button class="w-full mt-2 py-2 px-4 bg-gray-100 hover:bg-gray-200 text-gray-700 rounded-md font-medium">Reset Filters</button>
                    </div>
                </div>
                
                <!-- Project Listings -->
                <div class="mt-8 lg:mt-0 lg:col-span-9">
                    <div class="flex justify-between items-center mb-6">
                        <div>
                            <span class="text-gray-600">Showing 64 projects</span>
                        </div>
                        <div class="flex items-center">
                            <span class="mr-2 text-gray-600">Sort by:</span>
                            <select class="p-2 border border-gray-300 rounded-md">
                                <option>Most Popular</option>
                                <option>Newest</option>
                                <option>Ending Soon</option>
                                <option>Most Funded</option>
                                <option>Least Funded</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Project Card 1 -->
                        <div class="bg-white rounded-lg overflow-hidden shadow-md border border-gray-200">
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
                        <div class="bg-white rounded-lg overflow-hidden shadow-md border border-gray-200">
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
                        <div class="bg-white rounded-lg overflow-hidden shadow-md border border-gray-200">
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
                        
                        <!-- Project Card 4 -->
                        <div class="bg-white rounded-lg overflow-hidden shadow-md border border-gray-200">
                            <img src="/api/placeholder/400/250" alt="Mental Health Support" class="w-full h-48 object-cover" />
                            <div class="p-6">
                                <div class="flex justify-between items-center mb-3">
                                    <span class="text-xs font-semibold px-2 py-1 bg-secondary-light text-primary-dark rounded-full">Health</span>
                                    <span class="text-xs text-gray-500">31 days left</span>
                                </div>
                                <h3 class="text-xl font-bold text-primary-dark mb-2">Mental Health Support Network</h3>
                                <p class="text-gray-600 mb-4 line-clamp-3">Creating accessible mental health resources and support groups for vulnerable populations.</p>
                                <div class="mb-4">
                                    <div class="w-full bg-gray-200 rounded-full h-2.5">
                                        <div class="bg-secondary-dark h-2.5 rounded-full" style="width: 25%"></div>
                                    </div>
                                    <div class="flex justify-between mt-2 text-sm text-gray-600">
                                        <span>$3,750 raised</span>
                                        <span>25% of $15,000</span>
                                    </div>
                                </div>
                                <a href="project-details.html" class="block text-center w-full px-4 py-2 bg-primary hover:bg-primary-light text-white rounded-md">View Project</a>
                            </div>
                        </div>
                        
                        <!-- Project Card 5 -->
                        <div class="bg-white rounded-lg overflow-hidden shadow-md border border-gray-200">
                            <img src="/api/placeholder/400/250" alt="Youth Art Program" class="w-full h-48 object-cover" />
                            <div class="p-6">
                                <div class="flex justify-between items-center mb-3">
                                    <span class="text-xs font-semibold px-2 py-1 bg-secondary-light text-primary-dark rounded-full">Arts & Culture</span>
                                    <span class="text-xs text-gray-500">18 days left</span>
                                </div>
                                <h3 class="text-xl font-bold text-primary-dark mb-2">Youth Art for Change</h3>
                                <p class="text-gray-600 mb-4 line-clamp-3">Empowering youth through creative expression and providing access to arts education in underserved communities.</p>
                                <div class="mb-4">
                                    <div class="w-full bg-gray-200 rounded-full h-2.5">
                                        <div class="bg-secondary-dark h-2.5 rounded-full" style="width: 60%"></div>
                                    </div>
                                    <div class="flex justify-between mt-2 text-sm text-gray-600">
                                        <span>$7,200 raised</span>
                                        <span>60% of $12,000</span>
                                    </div>
                                </div>
                                <a href="project-details.html" class="block text-center w-full px-4 py-2 bg-primary hover:bg-primary-light text-white rounded-md">View Project</a>
                            </div>
                        </div>
                        
                        <!-- Project Card 6 -->
                        <div class="bg-white rounded-lg overflow-hidden shadow-md border border-gray-200">
                            <img src="/api/placeholder/400/250" alt="Tech Innovation" class="w-full h-48 object-cover" />
                            <div class="p-6">
                                <div class="flex justify-between items-center mb-3">
                                    <span class="text-xs font-semibold px-2 py-1 bg-secondary-light text-primary-dark rounded-full">Technology</span>
                                    <span class="text-xs text-gray-500">9 days left</span>
                                </div>
                                <h3 class="text-xl font-bold text-primary-dark mb-2">Accessible Tech Solutions</h3>
                                <p class="text-gray-600 mb-4 line-clamp-3">Developing affordable technology solutions for people with disabilities to improve quality of life and independence.</p>
                                <div class="mb-4">
                                    <div class="w-full bg-gray-200 rounded-full h-2.5">
                                        <div class="bg-secondary-dark h-2.5 rounded-full" style="width: 85%"></div>
                                    </div>
                                    <div class="flex justify-between mt-2 text-sm text-gray-600">
                                        <span>$42,500 raised</span>
                                        <span>85% of $50,000</span>
                                    </div>
                                </div>
                                <a href="project-details.html" class="block text-center w-full px-4 py-2 bg-primary hover:bg-primary-light text-white rounded-md">View Project</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Pagination -->
                    <div class="mt-8 flex justify-center">
                        <nav class="flex items-center">
                            <a href="#" class="px-3 py-2 rounded-md bg-white border border-gray-300 text-primary-dark hover:bg-gray-50 mr-2">
                                <i class="fas fa-chevron-left"></i>
                            </a>
                            <a href="#" class="px-4 py-2 rounded-md bg-primary text-white font-medium mr-2">1</a>
                            <a href="#" class="px-4 py-2 rounded-md bg-white border border-gray-300 text-primary-dark hover:bg-gray-50 mr-2">2</a>
                            <a href="#" class="px-4 py-2 rounded-md bg-white border border-gray-300 text-primary-dark hover:bg-gray-50 mr-2">3</a>
                            <span class="px-4 py-2 text-gray-500">...</span>
                            <a href="#" class="px-4 py-2 rounded-md bg-white border border-gray-300 text-primary-dark hover:bg-gray-50 mr-2">8</a>
                            <a href="#" class="px-3 py-2 rounded-md bg-white border border-gray-300 text-primary-dark hover:bg-gray-50">
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </main>

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