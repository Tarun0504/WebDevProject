<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Start a Project - SocialFund</title>
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
                        <a href="index.html" class="px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:text-white hover:bg-primary-light">Home</a>
                        <a href="discover.html" class="px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:text-white hover:bg-primary-light">Discover</a>
                        <a href="start-project.html" class="px-3 py-2 rounded-md text-sm font-medium text-white bg-primary hover:bg-primary-light">Start a Project</a>
                        <a href="how-it-works.html" class="px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:text-white hover:bg-primary-light">How It Works</a>
                        <a href="about.html" class="px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:text-white hover:bg-primary-light">About Us</a>
                    </div>
                </div>
                <div class="hidden md:flex items-center">
                    <a href="login.html" class="px-4 py-2 text-sm font-medium text-white hover:bg-primary-light rounded-md">Log In</a>
                    <a href="signup.html" class="ml-4 px-4 py-2 text-sm font-medium text-white bg-secondary-dark hover:bg-secondary rounded-md">Sign Up</a>
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
                <a href="index.html" class="block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-primary-light">Home</a>
                <a href="discover.html" class="block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-primary-light">Discover</a>
                <a href="start-project.html" class="block px-3 py-2 rounded-md text-base font-medium text-white bg-primary-light">Start a Project</a>
                <a href="how-it-works.html" class="block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-primary-light">How It Works</a>
                <a href="about.html" class="block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-primary-light">About Us</a>
                <div class="border-t border-gray-700 pt-4 pb-3 mt-3">
                    <a href="login.html" class="block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-primary-light">Log In</a>
                    <a href="signup.html" class="block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-primary-light">Sign Up</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-primary text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="text-center">
                <h1 class="text-4xl font-bold tracking-tight">Start Your Social Impact Project</h1>
                <p class="mt-4 text-xl text-gray-100 max-w-3xl mx-auto">Turn your vision for social change into reality with the support of our global community.</p>
            </div>
        </div>
    </section>

    <!-- Project Form Section -->
    <section class="py-16 bg-white">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white shadow-lg rounded-lg p-8">
                <h2 class="text-2xl font-bold text-primary-dark mb-6">Project Details</h2>
                
                <form>
                    <!-- Basic Information -->
                    <div class="mb-8">
                        <h3 class="text-lg font-semibold text-primary mb-4">Basic Information</h3>
                        
                        <div class="mb-4">
                            <label for="project-title" class="block text-sm font-medium text-gray-700 mb-1">Project Title</label>
                            <input type="text" id="project-title" name="project-title" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary" placeholder="Enter your project title" required>
                        </div>
                        
                        <div class="mb-4">
                            <label for="project-category" class="block text-sm font-medium text-gray-700 mb-1">Project Category</label>
                            <select id="project-category" name="project-category" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary" required>
                                <option value="" disabled selected>Select a category</option>
                                <option value="education">Education</option>
                                <option value="environment">Environment</option>
                                <option value="community">Community</option>
                                <option value="health">Health</option>
                                <option value="arts">Arts & Culture</option>
                                <option value="technology">Technology</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        
                        <div class="mb-4">
                            <label for="project-location" class="block text-sm font-medium text-gray-700 mb-1">Project Location</label>
                            <input type="text" id="project-location" name="project-location" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary" placeholder="City, Country" required>
                        </div>
                    </div>
                    
                    <!-- Project Description -->
                    <div class="mb-8">
                        <h3 class="text-lg font-semibold text-primary mb-4">Project Description</h3>
                        
                        <div class="mb-4">
                            <label for="project-summary" class="block text-sm font-medium text-gray-700 mb-1">Short Summary (150 characters max)</label>
                            <textarea id="project-summary" name="project-summary" rows="2" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary" placeholder="Briefly describe your project" maxlength="150" required></textarea>
                        </div>
                        
                        <div class="mb-4">
                            <label for="project-description" class="block text-sm font-medium text-gray-700 mb-1">Detailed Description</label>
                            <textarea id="project-description" name="project-description" rows="6" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary" placeholder="Provide a detailed description of your project, its goals, and impact" required></textarea>
                        </div>
                        
                        <div class="mb-4">
                            <label for="project-impact" class="block text-sm font-medium text-gray-700 mb-1">Expected Impact</label>
                            <textarea id="project-impact" name="project-impact" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary" placeholder="Describe the social impact your project will create" required></textarea>
                        </div>
                    </div>
                    
                    <!-- Funding Information -->
                    <div class="mb-8">
                        <h3 class="text-lg font-semibold text-primary mb-4">Funding Information</h3>
                        
                        <div class="mb-4">
                            <label for="funding-goal" class="block text-sm font-medium text-gray-700 mb-1">Funding Goal ($)</label>
                            <input type="number" id="funding-goal" name="funding-goal" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary" placeholder="Enter your funding goal" min="1" required>
                        </div>
                        
                        <div class="mb-4">
                            <label for="funding-timeline" class="block text-sm font-medium text-gray-700 mb-1">Funding Duration (days)</label>
                            <select id="funding-timeline" name="funding-timeline" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary" required>
                                <option value="" disabled selected>Select duration</option>
                                <option value="15">15 days</option>
                                <option value="30">30 days</option>
                                <option value="45">45 days</option>
                                <option value="60">60 days</option>
                                <option value="90">90 days</option>
                            </select>
                        </div>
                        
                        <div class="mb-4">
                            <label for="budget-breakdown" class="block text-sm font-medium text-gray-700 mb-1">Budget Breakdown</label>
                            <textarea id="budget-breakdown" name="budget-breakdown" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary" placeholder="Provide a detailed breakdown of how the funds will be used" required></textarea>
                        </div>
                    </div>
                    
                    <!-- Media Upload -->
                    <div class="mb-8">
                        <h3 class="text-lg font-semibold text-primary mb-4">Project Media</h3>
                        
                        <div class="mb-4">
                            <label for="project-image" class="block text-sm font-medium text-gray-700 mb-1">Project Image (Cover Photo)</label>
                            <div class="flex items-center justify-center w-full">
                                <label class="flex flex-col w-full h-32 border-2 border-dashed border-gray-300 rounded-lg cursor-pointer hover:bg-gray-50">
                                    <div class="flex flex-col items-center justify-center pt-7">
                                        <i class="fas fa-cloud-upload-alt text-gray-400 text-3xl mb-2"></i>
                                        <p class="text-sm text-gray-500">Click to upload or drag and drop</p>
                                        <p class="text-xs text-gray-400 mt-1">PNG, JPG up to 5MB</p>
                                    </div>
                                    <input type="file" id="project-image" name="project-image" class="hidden" accept="image/*">
                                </label>
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <label for="project-video" class="block text-sm font-medium text-gray-700 mb-1">Project Video (Optional)</label>
                            <input type="text" id="project-video" name="project-video" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary" placeholder="Enter YouTube or Vimeo URL">
                        </div>
                    </div>
                    
                    <!-- Reward Tiers -->
                    <div class="mb-8">
                        <h3 class="text-lg font-semibold text-primary mb-4">Reward Tiers (Optional)</h3>
                        
                        <div class="bg-gray-50 p-4 rounded-md mb-4">
                            <div class="mb-2">
                                <label for="reward-amount-1" class="block text-sm font-medium text-gray-700 mb-1">Pledge Amount ($)</label>
                                <input type="number" id="reward-amount-1" name="reward-amount-1" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary" placeholder="e.g., 25">
                            </div>
                            
                            <div class="mb-2">
                                <label for="reward-title-1" class="block text-sm font-medium text-gray-700 mb-1">Reward Title</label>
                                <input type="text" id="reward-title-1" name="reward-title-1" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary" placeholder="e.g., Early Supporter">
                            </div>
                            
                            <div>
                                <label for="reward-description-1" class="block text-sm font-medium text-gray-700 mb-1">Reward Description</label>
                                <textarea id="reward-description-1" name="reward-description-1" rows="2" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary" placeholder="Describe what supporters will receive"></textarea>
                            </div>
                        </div>
                        
                        <button type="button" class="flex items-center text-primary hover:text-primary-dark">
                            <i class="fas fa-plus-circle mr-2"></i> Add Another Reward Tier
                        </button>
                    </div>
                    
                    <!-- Terms and Submission -->
                    <div>
                        <div class="mb-6">
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="terms" name="terms" type="checkbox" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded" required>
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="terms" class="font-medium text-gray-700">I agree to the <a href="terms.html" class="text-primary hover:underline">Terms of Service</a> and <a href="guidelines.html" class="text-primary hover:underline">Project Guidelines</a></label>
                                </div>
                            </div>
                        </div>
                        
                        <button type="submit" class="w-full px-6 py-3 bg-secondary-dark hover:bg-secondary text-white rounded-md font-medium">Submit Project for Review</button>
                        <p class="mt-4 text-sm text-gray-500 text-center">Your project will be reviewed by our team within 2-3 business days.</p>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Success Stories Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-primary-dark">Success Stories</h2>
                <p class="mt-4 text-lg text-gray-600 max-w-3xl mx-auto">Be inspired by those who have successfully funded their projects.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                    <img src="/api/placeholder/400/200" alt="Success Story" class="w-full h-48 object-cover" />
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-primary-dark mb-2">Community Garden Initiative</h3>
                        <p class="text-gray-600 mb-4">Raised $12,000 in 30 days to transform an abandoned lot into a thriving community garden.</p>
                        <a href="#" class="text-primary hover:text-primary-dark font-medium">Read their story <i class="fas fa-arrow-right ml-1"></i></a>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                    <img src="/api/placeholder/400/200" alt="Success Story" class="w-full h-48 object-cover" />
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-primary-dark mb-2">Clean Water for All</h3>
                        <p class="text-gray-600 mb-4">Funded $25,000 to provide clean water solutions to five villages in rural areas.</p>
                        <a href="#" class="text-primary hover:text-primary-dark font-medium">Read their story <i class="fas fa-arrow-right ml-1"></i></a>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                    <img src="/api/placeholder/400/200" alt="Success Story" class="w-full h-48 object-cover" />
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-primary-dark mb-2">Youth Coding Program</h3>
                        <p class="text-gray-600 mb-4">Raised $18,500 to launch a coding boot camp for underprivileged youth.</p>
                        <a href="#" class="text-primary hover:text-primary-dark font-medium">Read their story <i class="fas fa-arrow-right ml-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-primary-dark">Frequently Asked Questions</h2>
                <p class="mt-4 text-lg text-gray-600">Find answers to common questions about starting a project.</p>
            </div>
            
            <div class="space-y-4">
                <div class="bg-gray-50 rounded-lg p-6">
                    <button class="flex justify-between items-center w-full text-left">
                        <h3 class="text-lg font-semibold text-primary-dark">What types of projects can be funded on SocialFund?</h3>
                        <i class="fas fa-chevron-down text-primary-dark"></i>
                    </button>
                    <div class="mt-3">
                        <p class="text-gray-600">SocialFund supports projects that create positive social impact in various areas including education, environment, community development, health, arts & culture, and technology. Projects should have clear goals, a defined timeline, and measurable impact.</p>
                    </div>
                </div>
                
                <div class="bg-gray-50 rounded-lg p-6">
                    <button class="flex justify-between items-center w-full text-left">
                        <h3 class="text-lg font-semibold text-primary-dark">How long does the review process take?</h3>
                        <i class="fas fa-chevron-down text-primary-dark"></i>
                    </button>
                    <div class="mt-3">
                        <p class="text-gray-600">Our team reviews all submitted projects within 2-3 business days. We check for completeness, clarity, and alignment with our platform guidelines. You'll receive an email notification once the review is complete.</p>
                    </div>
                </div>
                
                <div class="bg-gray-50 rounded-lg p-6">
                    <button class="flex justify-between items-center w-full text-left">
                        <h3 class="text-lg font-semibold text-primary-dark">What happens if I don't reach my funding goal?</h3>
                        <i class="fas fa-chevron-down text-primary-dark"></i>
                    </button>
                    <div class="mt-3">
                        <p class="text-gray-600">SocialFund operates on an all-or-nothing funding model. If you don't reach your funding goal by the end of your campaign period, all pledges will be returned to the donors, and no fees will be charged.</p>
                    </div>
                </div>
                
                <div class="bg-gray-50 rounded-lg p-6">
                    <button class="flex justify-between items-center w-full text-left">
                        <h3 class="text-lg font-semibold text-primary-dark">What fees does SocialFund charge?</h3>
                        <i class="fas fa-chevron-down text-primary-dark"></i>
                    </button>
                    <div class="mt-3">
                        <p class="text-gray-600">SocialFund charges a 5% platform fee on successfully funded projects, plus payment processing fees (approximately 3%). These fees help us maintain and improve the platform while providing support to project creators.</p>
                    </div>
                </div>
                
                <div class="bg-gray-50 rounded-lg p-6">
                    <button class="flex justify-between items-center w-full text-left">
                        <h3 class="text-lg font-semibold text-primary-dark">Can I edit my project after submission?</h3>
                        <i class="fas fa-chevron-down text-primary-dark"></i>
                    </button>
                    <div class="mt-3">
                        <p class="text-gray-600">You can make minor edits to your project while it's in the review stage. Once your project is live, you can still update the project description, add FAQs, and post updates, but you cannot change the funding goal or duration.</p>
                    </div>
                </div>
            </div>
            
            <div class="mt-8 text-center">
                <a href="faq.html" class="text-primary hover:text-primary-dark font-medium">View all FAQs <i class="fas fa-arrow-right ml-1"></i></a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-primary text-white pt-12 pb-6 mt-auto">
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
        
        // FAQ toggle
        document.querySelectorAll('.bg-gray-50').forEach(item => {
            item.querySelector('button').addEventListener('click', () => {
                item.querySelector('div').classList.toggle('hidden');
                item.querySelector('i').classList.toggle('fa-chevron-up');
                item.querySelector('i').classList.toggle('fa-chevron-down');
            });
        });
    </script>
</body>
</html>