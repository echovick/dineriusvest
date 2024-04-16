<?php

namespace App\Constants;

class Education
{
    public $courseChapters = [
        [
            'chapterNumber' => 1,
            'chapterTitle' => 'CHAPTER ONE',
            'sections' => [
                [
                    'title' => 'Introduction',
                    'text' => 'Investment is a powerful tool that allows individuals to grow their wealth and achieve financial goals. However, successful investing requires knowledge, strategy, and careful decision-making. In this comprehensive essay, we will explore the fundamental principles of investment, examine different investment strategies, and provide essential insights to help investors make informed decisions.',
                ],
                [
                    'title' => 'Understanding Investment',
                    'text' => ['To embark on a successful investment journey, one must grasp the core concept of investment. Investment involves committing funds to acquire assets or financial instruments with the expectation of generating positive returns in the future. The primary aim of investing is to grow wealth over time, beat inflation, and achieve various financial goals, such as buying a house, funding education, or preparing for retirement.', 'Different investment options carry varying degrees of risk and potential returns. High-risk investments like stocks may yield substantial profits but also come with higher volatility. On the other hand, low-risk investments like bonds offer more stability but may provide lower returns. Understanding risk tolerance, time horizon, and financial objectives are crucial when choosing investment vehicles that align with individual circumstances.'],
                ],
            ],
            'QA' => [
                [
                    'question' => 'What is the primary aim of investing?',
                    'options' => ['To generate negative returns in the future.', 'To beat inflation and achieve various financial goals.', 'To commit funds to acquire liabilities'],
                    'answer' => 1,
                ]
            ],
        ],
        [
            'chapterNumber' => 2,
            'chapterTitle' => 'CHAPTER TWO',
            'sections' => [
                [
                    'title' => 'Setting Investment Goals',
                    'text' => ['Clearly defining investment goals lays the foundation for a well-structured and purposeful investment plan. SMART goals (Specific, Measurable, Achievable, Relevant, Time-bound) help investors establish clear targets and track progress effectively. For instance, a goal to save for a down payment on a house within five years can be a SMART goal, making it easier to determine how much to invest and how to allocate those investments.', 'Clearly defining investment goals lays the foundation for a well-structured and purposeful investment plan. SMART goals (Specific, Measurable, Achievable, Relevant, Time-bound) help investors establish clear targets and track progress effectively. For instance, a goal to save for a down payment on a house within five years can be a SMART goal, making it easier to determine how much to invest and how to allocate those investments.', 'Investment goals should consider factors like short-term needs, long-term aspirations, and risk appetite. By establishing clear objectives, investors can identify the appropriate investment strategies and make informed decisions in line with their financial aspirations.'],
                ],
                [
                    'title' => 'Risk and Return',
                    'text' => ['Risk and return are two fundamental aspects of investing that are intricately linked. Generally, investments offering higher potential returns also carry higher risks. Investors must strike a balance between taking on risk to maximize returns and preserving capital to minimize potential losses.', 'Diversification is a key risk management strategy that involves spreading investments across different asset classes, industries, and geographical regions. By diversifying, investors reduce the impact of poor performance in any single investment, which can help mitigate overall risk.', 'Risk tolerance varies among individuals, and it is essential to assess ones ability and willingness to handle fluctuations in the value of investments. Some investors are more comfortable with aggressive, growth-oriented strategies, while others prefer more conservative approaches to protect capital.'],
                ],
            ],
            'QA' => [
                [
                    'question' => 'What does SMART stand for in setting investment goals?',
                    'options' => ['Simple, Measurable, Achievable, Relevant, Tangible', 'Specific, Measurable, Achievable, Relevant, Time-bound ', 'Strategic, Measurable, Achievable, Reliable, Timely'],
                    'answer' => 1,
                ],
                [
                    'question' => 'What is the primary purpose of diversification in investment?',
                    'options' => ['To maximize potential returns by concentrating investments in a single asset class.', 'To reduce overall risk by spreading investments across different asset classes, industries, and regions', 'To minimize potential losses by investing solely in high-risk assets.'],
                    'answer' => 1,
                ],
            ],
        ],
        [
            'chapterNumber' => 3,
            'chapterTitle' => 'CHAPTER THREE',
            'sections' => [
                [
                    'title' => 'Investment Vehicles',
                    'text' => ['Investment vehicles refer to the various options available to investors to park their money. These can include stocks, bonds, mutual funds, ETFs, real estate, commodities, and more. Each investment vehicle carries its unique characteristics, risks, and potential returns.', 'Stocks represent ownership in a company and offer an opportunity to participate in its growth and success. Bonds are debt instruments issued by governments or corporations, offering a fixed income stream.', 'Mutual funds and ETFs are collective investment funds that pool money from multiple investors to invest in a diversified portfolio of assets, managed by professional fund managers. Real estate investment involves purchasing properties for rental income or potential appreciation.', 'Understanding the nuances of each investment vehicle and their compatibility with investment goals is vital for constructing a well-balanced portfolio.'],
                ],
                [
                    'title' => 'Stock Market Investing',
                    'text' => ['Investing in the stock market can be both rewarding and challenging. Investors buy shares of publicly traded companies, becoming partial owners. The value of these shares can fluctuate based on market conditions, company performance, and investor sentiment.', 'Fundamental analysis involves evaluating a companys financial health, profitability, growth potential, and management team to determine its intrinsic value. Technical analysis involves studying past price movements and patterns to predict future trends.', 'Investors need to stay informed about market developments, conduct thorough research, and carefully consider the risks before investing in individual stocks. Alternatively, they may choose to invest in diversified stock mutual funds or ETFs to reduce stock-specific risk.'],
                ],
                [
                    'title' => 'Fixed Income Investments',
                    'text' => ['Fixed income investments are characterized by regular interest payments and a predetermined maturity date. Bonds are a common example of fixed income instruments. When purchasing bonds, investors lend money to the issuer (a government or corporation) in exchange for periodic interest payments and the return of the principal amount at maturity.', 'The risk associated with fixed income investments primarily centers around interest rate fluctuations. When interest rates rise, the market value of existing bonds typically falls, and vice versa.', 'Investors must assess factors like credit quality, interest rate risk, yield-to-maturity, and the time horizon when considering fixed income investments.'],
                ],
                [
                    'title' => 'Real Estate Investing',
                    'text' => ['Investing in real estate offers opportunities for both rental income and potential property appreciation. Real estate can serve as a tangible and valuable asset in an investment portfolio.', 'Investors should carefully analyze potential real estate investments, considering factors like location, property condition, market trends, rental demand, and potential expenses associated with property maintenance.', 'Real estate investment may require active involvement as a landlord or passive participation through real estate investment trusts (REITs) and real estate crowdfunding platforms.'],
                ],
                [
                    'title' => 'Mutual Funds and ETFs',
                    'text' => ['Mutual funds and ETFs provide investors with diversified exposure to various asset classes and investment strategies. A mutual fund is managed by a professional fund manager who makes decisions on behalf of investors. An ETF is a passively managed fund that seeks to replicate the performance of a specific market index.', 'Both mutual funds and ETFs offer a simple way for investors to access diverse investment options without requiring significant capital. Investors should evaluate expense ratios, historical performance, and investment strategies when choosing between mutual funds and ETFs'],
                ],
            ],
            'QA' => [
                [
                    'question' => 'What are mutual funds and ETFs?',
                    'options' => ['Debt instruments issued by governments or corporations.', 'Investment funds that pool money from multiple investors to invest in a diversified portfolio of assets.', 'Properties purchased for rental income or potential appreciation.'],
                    'answer' => 1
                ],
                [
                    'question' => 'What is the primary purpose of fundamental analysis in stock market investing?',
                    'options' => ['Studying past price movements and patterns to predict future trends.', 'Evaluating a companys financial health, profitability, growth potential, and management team.', 'Reducing stock-specific risk by investing in diversified stock mutual funds or ETFs.'],
                    'answer' => 1
                ],
                [
                    'question' => 'What is the primary risk associated with fixed income investments like bonds?',
                    'options' => ['Fluctuation in market value based on interest rate changes.', 'Potential property appreciation in real estate investments.', 'Active involvement as a landlord in real estate investment.'],
                    'answer' => 0
                ]
            ]
        ],
        [
            'chapterNumber' => 4,
            'chapterTitle' => 'CHAPTER FOUR',
            'sections' => [
                [
                    'title' => 'Risk Management and Asset Allocation',
                    'text' => ['Asset allocation involves dividing investments across different asset classes, such as stocks, bonds, and cash, to optimize returns while minimizing risk. The goal is to create a portfolio that aligns with an individuals risk tolerance, time horizon, and financial objectives.', 'Strategic asset allocation involves setting a target allocation based on long-term financial goals. Tactical asset allocation allows for periodic adjustments based on market conditions and short-term trends.', 'Regular monitoring and periodic rebalancing are essential to maintaining the desired asset allocation, as market fluctuations can cause deviations from the original plan.']
                ],
                [
                    'title' => 'Investing for Retirement',
                    'text' => ['Investing for retirement is a critical aspect of long-term financial planning. Tax-advantaged retirement accounts like 401(k)s and IRAs offer attractive benefits, such as tax-deferred growth or tax-free withdrawals in retirement.', 'Employer-sponsored retirement plans often include employer matching contributions, providing an opportunity for additional growth of retirement savings.', 'Investors must consider their time horizon until retirement, risk tolerance, and retirement lifestyle goals when creating a retirement investment plan.']
                ]
            ],
            'QA' => [
                [
                    'question' => 'What is the primary purpose of asset allocation in investment?',
                    'options' => ['To divide investments across different asset classes for tax advantages.', 'To optimize returns while minimizing risk by creating a well-balanced portfolio.', 'To periodically adjust investment strategies based on market conditions.'],
                    'answer' => 1
                ],
                [
                    'question' => 'What benefits do tax-advantaged retirement accounts like 401(k)s and IRAs offer?',
                    'options' => ['Tax-free withdrawals in retirement and employer matching contributions.', 'Tax-deferred growth and additional growth through employer matching contributions.', 'Tax-free withdrawals in retirement and tax-deferred growth.'],
                    'answer' => 1
                ]
            ]
        ],
        [
            'chapterNumber' => 5,
            'chapterTitle' => 'CHAPTER FIVE',
            'sections' => [
                [
                    'title' => 'Investor Behavior and Emotions',
                    'text' => ['Investor behavior and emotions can significantly impact investment decisions and outcomes. Fear and greed can lead to impulsive decisions, such as buying at market peaks or selling during downturns.', 'To avoid emotional decision-making, investors should focus on their long-term investment objectives, stay disciplined, and avoid reactionary responses to short-term market movements.', 'Regularly reviewing and rebalancing the investment portfolio in line with financial goals and risk tolerance can help maintain a disciplined approach.']
                ]
            ],
            'QA' => [
                [
                    'question' => 'How can emotions and investor behavior impact investment decisions?',
                    'options' => ['Emotions like fear and greed can lead to impulsive decisions, affecting investment outcomes.', 'Regularly reviewing and rebalancing the investment portfolio can lead to better long-term results.', 'Short-term market movements have little impact on investment decisions.'],
                    'answer' => 0
                ]
            ]
        ],
        [
            'chapterNumber' => 6,
            'chapterTitle' => 'CHAPTER SIX: A Step-by-Step Guide to Crafting the Right Investment Strategy',
            'sections' => [
                [
                    'title' => 'Introduction',
                    'text' => 'Investing is a powerful tool to grow wealth and achieve financial goals. However, making the right investment strategy requires careful planning, understanding individual needs, and a disciplined approach. This step-by-step guide aims to help you develop a well-rounded investment strategy that aligns with your objectives and risk tolerance',
                ],
                [
                    'title' => 'Step 1',
                    'text' => 'Set Clear Goals Begin by defining your investment objectives. Determine your short-term and long-term financial goals, such as buying a home, funding education, or planning for retirement. Ensure these goals are specific, measurable, achievable, relevant, and time-bound (SMART).'
                ],
                [
                    'title' => 'Step 2',
                    'text' => 'Assess Risk Tolerance Evaluate your risk tolerance by considering how comfortable you are with fluctuations in the value of your investments. Understand that higher returns often come with higher risks. Be honest with yourself about your ability to handle market volatility.',
                ],
                [
                    'title' => 'Step 3',
                    'text' => 'Diversification is Key Spread your investments across different asset classes, industries, and regions. Diversification helps reduce the impact of poor performance in any single investment, thus mitigating overall risk. A diversified portfolio can include stocks, bonds, real estate, and other investment options.'
                ],
                [
                    'title' => 'Step 4',
                    'text' => 'Educate Yourself Gain a comprehensive understanding of various investment vehicles, including stocks, bonds, mutual funds, ETFs, and real estate. Learn about their risk profiles, potential returns, and historical performance. Stay informed about market trends and economic indicators.',
                ],
                [
                    'title' => 'Step 5',
                    'text' => 'Seek Professional Guidance Consider consulting with a qualified financial advisor who can help tailor an investment strategy to your specific needs. A financial professional can provide personalized advice, portfolio management, and help you stay on track towards your goals.'
                ],
                [
                    'title' => 'Step 6',
                    'text' => 'Invest for the Long Term Avoid making impulsive decisions based on short-term market movements or emotional reactions. Stick to your investment plan and maintain a long-term perspective. Patience is essential in reaping the rewards of compounding growth.'
                ],
                [
                    'title' => 'Step 7',
                    'text' => 'Regularly Review and Rebalance Monitor your portfolio regularly and make adjustments when necessary. Rebalancing involves realigning your asset allocation to your target percentages to ensure it remains in line with your risk tolerance and investment objectives.'
                ],
                [
                    'title' => 'Step 8',
                    'text' => 'Utilize Retirement Accounts Take advantage of tax-advantaged retirement accounts, such as 401(k)s and IRAs, to maximize your retirement savings. Employer matching contributions can significantly boost your retirement nest egg.'
                ],
                [
                    'title' => 'Step 9',
                    'text' => 'Stay Disciplined Stick to your investment strategy even during market fluctuations or economic downturns. Avoid making emotional decisions that can derail your long-term financial goals.',
                ],
                [
                    'title' => 'Step 10',
                    'text' => 'Continuously Educate Yourself Stay updated on investment trends, economic conditions, and changes in the financial landscape. Continuously educate yourself to adapt your investment strategy as needed.'
                ],
                [
                    'title' => 'Conclusion',
                    'text' => 'Crafting the right investment strategy requires thoughtful planning, diversification, and a commitment to long-term goals. By setting clear objectives, assessing risk tolerance, seeking professional guidance, and staying disciplined, you can create an investment plan that paves the way for financial success and a secure future. Remember, the journey of investing is continuous, and staying informed and adaptable will lead to more informed decisions and greater financial confidence.'
                ]
            ]
        ],
        [
            'chapterNumber' => 0,
            'chapterTitle' => 'CONCLUSION',
            'sections' => [
                [
                    'title' => '',
                    'text' => ['Investment is a multifaceted and dynamic field that offers opportunities for individuals to achieve their financial goals and build long-term wealth. By understanding fundamental investment principles, setting clear objectives, diversifying investments, and managing risk, investors can navigate the complexities of the financial markets with confidence.', 'Ongoing education, thoughtful planning, and a disciplined approach are key to successful investing. Each individuals financial situation is unique, and finding the right investment strategy requires careful consideration of personal circumstances, financial goals, and risk tolerance.', 'Seeking guidance from financial advisors or investment professionals can provide valuable insights and help individuals make informed decisions aligned with their aspirations for a secure financial future. Remember, investing is a journey that requires continuous learning and adaptation to seize opportunities and navigate challenges for optimal returns. With patience and perseverance, investors can navigate the vast world of investment, fulfilling their financial ambitions and securing their financial future.']
                ]
            ],
            'QA' => [
                [
                    'question' => 'What are the key factors essential for successful investing?',
                    'options' => ['Seeking guidance from financial advisors or investment professionals.', 'Setting clear objectives and managing risk through diversification.', 'The financial markets are unpredictable and require continuous learning.'],
                    'answe' => 1
                ]
            ]
        ]
    ];

    public function getChapters($chapter = null)
    {
        $chapters = collect($this->courseChapters);

        if(isset($chapter)){
            return $chapters->where('chapterNumber', $chapter)->first();
        }

        return $chapters;
    }
}
